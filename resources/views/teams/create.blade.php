@extends('layouts.base')

@section('content')
<h2>Team Toevoegen</h2>
        <form action="{{ route('teams.store') }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Team Naam:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="player_count">Aantal spelers</label>
            <input type="number" name="player_count" id="player_count" value="{{ old('player_count') }}" required>
            @error('player_count')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="coach_name">Coach Naam:</label>
            <input type="text" name="coach_name" id="coach_name" value="{{ old('coach_name')}}" required>
            @error('episodes')
                <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">Voeg anime toe</button>
        </form>
    @endsection
