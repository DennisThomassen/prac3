@extends('layouts.base')

@section('content')


<table class="box">
    <thead>
        <tr>
            <th>Team Naam</th>
            <th>Aantal Spelers</th>
            <th>Coach Naam</th>
            <th>Aanpassen</th>
            <th>Verwijderen</th>
            <th>Bekijken</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teams as $team)
            <tr>
                <td>{{$team->name}}</td>
                <td>{{$team->player_count}}</td>
                <td>{{$team->coach_name}}</td>
                <td>
                    <button>
                        <a href="{{route('teams.edit', $team->id)}}">Aanpassen</a>
                    </button>
                </td>
                <td>
                    <button>
                        <a href="{{route('teams.destroy', $team->id)}}">Verwijderen</a>
                    </button>
                </td>
                <td>
                    <button>
                        <a href="{{route('teams.show', $team->id)}}">Bekijken</a>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

