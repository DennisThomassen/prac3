@extends('layouts.base')

@section('content')
<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Team Details</h1>

        <div class="space-y-4">
            <div>
                <h2 class="text-sm font-medium text-gray-700">Team Naam</h2>
                <p class="text-lg text-gray-900">{{ $team->name }}</p>
            </div>

            <div>
                <h2 class="text-sm font-medium text-gray-700">Aantal Spelers</h2>
                <p class="text-lg text-gray-900">{{ $team->player_count }}</p>
            </div>

            <div>
                <h2 class="text-sm font-medium text-gray-700">Coach Naam</h2>
                <p class="text-lg text-gray-900">{{ $team->coach_name }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
