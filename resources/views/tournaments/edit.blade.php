@extends('layouts.base')

@section('content')
<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Tournament Bewerken</h2>
        <nav class="flex justify-center gap-4 py-6">


        </nav>
        <form action="{{ route('tournaments.update', $tournament->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Tournament Naam</label>
                <input type="text" name="name" id="name" value="{{ old('name', $tournament->name) }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="rounds" class="block text-sm font-medium text-gray-700">Aantal Rondes</label>
                <input type="number" name="rounds" id="rounds" value="{{ old('rounds', $tournament->rounds) }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('rounds')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="teams_competing" class="block text-sm font-medium text-gray-700">Deelnemende Teams</label>
                <input type="text" name="teams_competing" id="teams_competing" value="{{ old('teams_competing', $tournament->teams_competing) }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('teams_competing')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="prize_amount" class="block text-sm font-medium text-gray-700">Prijzengeld</label>
                <input type="text" name="prize_amount" id="prize_amount" value="{{ old('prize_amount', $tournament->prize_amount) }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('prize_amount')
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
