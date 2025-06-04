use App\Models\Team;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Auth routes zoals jij al had
// ...

Route::middleware('auth:sanctum')->group(function () {

    // TOURNAMENTS
    Route::get('/tournaments', function () {
        return Tournament::with('teams')->get();  // Toernooien + hun teams ophalen
    });

    Route::get('/tournaments/{tournament}', function (Tournament $tournament) {
        return $tournament->load('teams');  // Specifiek toernooi + teams
    });

    Route::post('/tournaments', function (Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'rounds' => 'required|integer',
            'teams_competing' => 'required|integer',
            'prize_amount' => 'nullable|numeric',
        ]);

        $tournament = Tournament::create($validated);
        return response()->json($tournament, 201);
    });

    Route::put('/tournaments/{tournament}', function (Request $request, Tournament $tournament) {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'rounds' => 'sometimes|required|integer',
            'teams_competing' => 'sometimes|required|integer',
            'prize_amount' => 'nullable|numeric',
        ]);

        $tournament->update($validated);
        return response()->json($tournament);
    });

    Route::delete('/tournaments/{tournament}', function (Tournament $tournament) {
        $tournament->delete();
        return response()->json(null, 204);
    });


    // TEAMS
    Route::get('/teams', function () {
        return Team::with('tournament')->get();  // Teams + toernooi info
    });

    Route::get('/teams/{team}', function (Team $team) {
        return $team->load('tournament');
    });

    Route::post('/teams', function (Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'player_count' => 'required|integer',
            'coach_name' => 'nullable|string|max:255',
            'tournament_id' => 'required|exists:tournaments,id',
        ]);

        $team = Team::create($validated);
        return response()->json($team, 201);
    });

    Route::put('/teams/{team}', function (Request $request, Team $team) {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'player_count' => 'sometimes|required|integer',
            'coach_name' => 'nullable|string|max:255',
            'tournament_id' => 'sometimes|required|exists:tournaments,id',
        ]);

        $team->update($validated);
        return response()->json($team);
    });

    Route::delete('/teams/{team}', function (Team $team) {
        $team->delete();
        return response()->json(null, 204);
    });

});
