@extends('layouts.base')

@section('content')

<h1>Team</h1>
<p>Team Naam: {{ $anime->name}}</p>
<p>Aantal Speler: {{ $anime->player_count}}</p>
<p>Coach Name: {{ $anime->coach_name}}</p>


@endsection
