<?php

 // kut thomas
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }
    public function edit($id){
        $team = Team::findOrFail($id);
        return view('teams.edit', compact('team'));
    }
    public function create(){
        $teams = Team::all();
        return view('teams.create', compact('teams'));
    }
    public function store(Request $request){
        $this -> validate($request, [
            'name' => 'required|string',
            'player_count' => 'required|integer',
            'coach_name' => 'required|string',
        ]);
        $team = new Team;
        $team->name = $request->input('name');
        $team->player_count = $request->input('player_count');
        $team->coach_name = $request->input('coach_name');

        $team->save();

        return redirect()->route('teams.index');
    }


    public function update(Request $request, string $id){
        $team = Team::findOrFail($id);
        $team->name = $request->get('name');
        $team->player_count = $request->get('player_count');
        $team->coach_name = $request->get('coach_name');

        $team->save();

        return redirect()->route('teams.index');
    }
    public function destroy(string $id){
        Team::findOrFail($id)->delete();
        return redirect()->route('teams.index');
    }
    public function show(string $id){
        $team = Team::findOrFail($id);
        return view('teams.show', compact('team'));
    }
}
