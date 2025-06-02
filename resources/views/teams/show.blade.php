@extends('layouts.base')

@section('content')

<h1>Team</h1>
<p>Team Naam: {{ $team->name}}</p>
<p>Aantal Speler: {{ $team->player_count}}</p>
<p>Coach Name: {{ $team->coach_name}}</p>


@endsection
