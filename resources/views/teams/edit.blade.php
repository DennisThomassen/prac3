@extends('layouts.base')

@section('content')
    <h2>Team Aanpassen</h2>
        <form action="{{route('teams.edit', $team->id)}}" method="POST">
            @csrf
            @method('POST')
            <label for="name">Team Naam:</label>
            <input type="text" name="name" id="name" value="{{$team->name}}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="player_count">Aantal Speler:</label>
            <input type="number" name="player_count" id="player_count" value="{{$team->player_count}}" required>
            @error('player_count')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="coach_name">Coach Naam</label>
            <input type="text" name="coach_name" id="coach_name" required>{{$team->coach_name}}</input>
            @error('coach_name')
                <div class="error">{{ $message }}</div>
            @enderror


            <button type="submit">Voeg anime toe</button>
        </form>

@endsection
