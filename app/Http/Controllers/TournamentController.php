<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all();
        return view('tournaments.index', compact('tournaments'));
    }
    public function edit($id)
    {
        $tournament = Tournament::findOrFail($id);
        return view('tournaments.edit', compact('tournament'));
    }
    public function create()
    {
        $tournaments = Tournament::all();
        return view('tournaments.create', compact('tournaments'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'rounds' => 'required|integer',
            'teams_competing' => 'required|string',
            'prize_amount' => 'required|numeric',
        ]);
        $tournament = new Tournament;
        $tournament->name = $request->input('name');
        $tournament->rounds = $request->input('rounds');
        $tournament->teams_competing = $request->input('teams_competing');
        $tournament->prize_amount = $request->input('prize_amount');

        $tournament->save();

        return redirect()->route('tournaments.index');
    }


    public function update(Request $request, string $id)
    {
        $tournament = Tournament::findOrFail($id);
        $tournament->name = $request->get('name');
        $tournament->rounds = $request->get('rounds');
        $tournament->teams_competing = $request->get('teams_competing');
        $tournament->prize_amount = $request->get('prize_amount');

        $tournament->save();

        return redirect()->route('tournaments.index');
    }
    public function destroy(string $id)
    {
        Tournament::findOrFail($id)->delete();
        return redirect()->route('tournaments.index');
    }
   public function show($id)
{
    $tournament = Tournament::findOrFail($id);

    $teams = $tournament->teams; // Dit moet een relatie zijn in je Tournament model!

    $rounds = [];
    $currentRound = $teams->map(function ($team) {
        return ['team_name' => $team->name];
    });

    while ($currentRound->count() > 1) {
        $rounds[] = $currentRound;
        $nextRound = collect();

        for ($i = 0; $i < $currentRound->count(); $i += 2) {
            $nextRound->push(['team_name' => 'Winner of ' . $currentRound[$i]['team_name'] . ' vs ' . $currentRound[$i + 1]['team_name']]);
        }

        $currentRound = $nextRound;
    }

    $rounds[] = $currentRound;

    return view('tournaments.show', compact('tournament', 'rounds'));
}
}
