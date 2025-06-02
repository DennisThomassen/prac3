@extends('layouts.base')

@section('content')
<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Team Bewerken</h2>

        <form action="{{ route('teams.update', $team->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Team Naam</label>
                <input type="text" name="name" id="name" value="{{ old('name', $team->name) }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="player_count" class="block text-sm font-medium text-gray-700">Aantal Spelers</label>
                <input type="number" name="player_count" id="player_count" value="{{ old('player_count', $team->player_count) }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('player_count')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="coach_name" class="block text-sm font-medium text-gray-700">Coach Naam</label>
                <input type="text" name="coach_name" id="coach_name" value="{{ old('coach_name', $team->coach_name) }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('coach_name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Wijzigingen opslaan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
