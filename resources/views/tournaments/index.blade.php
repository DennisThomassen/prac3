@extends('layouts.base')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    @if (auth()->user()->role === 'admin' || auth()->user()->role === 'moderator')
        <a href="{{ route('tournaments.create') }}"
           class="p-3 text-gray-900 bg-gray-100 rounded hover:bg-gray-200">
            Tournament toevoegen
        </a>
    @endif

    {{-- lijst met toernooien hier --}}
</div>
        <h2 class="text-2xl font-bold mb-4">Tournament Overzicht</h2>
        <table class="min-w-full table-auto border-collapse text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">Tournament Naam</th>
                    <th class="px-4 py-2">Aantal Rondes</th>
                    <th class="px-4 py-2">Deelenemede Teams</th>
                    <th class="px-4 py-2">Prijzengeld</th>
                    <th class="px-4 py-2">Aanpassen</th>
                    <th class="px-4 py-2">Verwijderen</th>
                    <th class="px-4 py-2">Bekijken</th>
            </a>
                </tr>
            </thead>
            <tbody>
                @foreach ($tournaments as $tournament)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $tournament->name }}</td>
                        <td class="px-4 py-2">{{ $tournament->rounds }}</td>
                        <td class="px-4 py-2">{{ $tournament->teams_competing }}</td>
                        <td class="px-4 py-2">{{ $tournament->prize_amount }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('tournaments.edit', $tournament->id) }}" class="text-blue-500 hover:underline">Aanpassen</a>
                        </td>
                        <td class="px-4 py-2">
                            <form method="POST" action="{{ route('tournaments.destroy', $tournament->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Verwijderen</button>
                            </form>
                        </td>
                        <td class="px-4 py-2">
                            <a href="{{ route('tournaments.show', $tournament->id) }}" class="text-green-500 hover:underline">Bekijken</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
