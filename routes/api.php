<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| Auth: login
|--------------------------------------------------------------------------
*/
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return response()->json([
        'token' => $user->createToken('wpf-app')->plainTextToken,
        'user' => $user,
    ]);
});

// AUTH
Route::post('/register', [AuthController::class, 'register']);

// TOURNAMENTS & MATCHES
Route::get('/tournaments', [TournamentController::class, 'index']);
Route::get('/tournaments/{id}', [TournamentController::class, 'show']); // inclusief teams & matches
Route::get('/matches/{id}', [MatchController::class, 'show']);

// BETS
Route::post('/bets', [BetController::class, 'store']);
Route::get('/bets/user', [BetController::class, 'userBets']); // authenticated

// MODERATOR ACTIONS
Route::middleware('role:gamblingModerator')->group(function () {
    Route::post('/matches/{id}/result', [MatchController::class, 'submitResult']);
});


/*
|--------------------------------------------------------------------------
| Authenticated: gebruiker ophalen
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->get('/me', function (Request $request) {
    return $request->user();
});
