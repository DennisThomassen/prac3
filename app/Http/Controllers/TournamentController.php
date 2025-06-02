<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index(){
        $tournaments = Tournament::all();
        return view('tournaments.index', compact('tournaments'));
    }
    public function edit($id){
        $tournament = Tournament::findOrFail($id);
        return view('tournaments.edit', compact('tournament'));
    }
    public function create(){
        $tournaments = Tournament::all();
        return view('tournaments.create', compact('tournaments'));
    }
    public function store(Request $request){
        $this -> validate($request, [
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


    public function update(Request $request, string $id){
        $tournament = Team::findOrFail($id);
        $tournament->name = $request->get('name');
        $tournament->rounds = $request->get('rounds');
        $tournament->teams_competing = $request->get('teams_competing');
        $tournament->prize_amount = $request->get('prize_amount');

        $tournament->save();

        return redirect()->route('tournaments.index');
    }
    public function destroy(string $id){
        Tournament::findOrFail($id)->delete();
        return redirect()->route('tournaments.index');
    }
    public function show(string $id){
        $tournament = Tournament::findOrFail($id);
        return view('tournaments.show', compact('tournament'));
    }
}
