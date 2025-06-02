@extends('layouts.base')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <a href="{{ route('teams.create') }}" class="p-3 text-gray-900 bg-gray-100 rounded hover:bg-gray-200">
                Team Toevoegen
            </a>
        <h2 class="text-2xl font-bold mb-4">Teamoverzicht</h2>
        <table class="min-w-full table-auto border-collapse text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">Team Naam</th>
                    <th class="px-4 py-2">Aantal Spelers</th>
                    <th class="px-4 py-2">Coach Naam</th>
                    <th class="px-4 py-2">Aanpassen</th>
                    @if (auth()->user()->role === 'admin' || auth()->user()->role === 'moderator')
                        <th class="px-4 py-2">Verwijderen</th>
                    @endif
                    <th class="px-4 py-2">Bekijken</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $team->name }}</td>
                        <td class="px-4 py-2">{{ $team->player_count }}</td>
                        <td class="px-4 py-2">{{ $team->coach_name }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('teams.edit', $team->id) }}" class="text-blue-500 hover:underline">Aanpassen</a>
                        </td>
                        @if (auth()->user()->role === 'admin' || auth()->user()->role === 'moderator')
                            <td class="px-4 py-2">
                                <form method="POST" action="{{ route('teams.destroy', $team->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Verwijderen</button>
                                </form>
                            </td>
                        @endif
                        <td class="px-4 py-2">
                            <a href="{{ route('teams.show', $team->id) }}" class="text-green-500 hover:underline">Bekijken</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
