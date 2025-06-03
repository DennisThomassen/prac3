@extends('layouts.base')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <h2 class="text-2xl font-bold mb-4">{{ $tournament->name }}</h2>
        <p><strong>Rondes:</strong> {{ $tournament->rounds }}</p>
        <p><strong>Deelnemende teams:</strong> {{ $tournament->teams_competing }}</p>
        <p><strong>Prijzengeld:</strong> €{{ $tournament->prize_amount }}</p>
    </div>

    <div class="mt-12">
        <h3 class="text-xl font-semibold mb-6">Toernooi Schema</h3>

        <div class="flex flex-col items-center space-y-8">
            <div class="flex justify-between w-full max-w-4xl">
                <!-- Ronde 1 -->
                <div class="space-y-4">
                    <div class="bg-white shadow p-2 rounded w-32 text-center">Team A</div>
                    <div class="bg-white shadow p-2 rounded w-32 text-center">Team B</div>
                    <div class="bg-white shadow p-2 rounded w-32 text-center">Team C</div>
                    <div class="bg-white shadow p-2 rounded w-32 text-center">Team D</div>
                </div>

                <!-- Ronde 2 -->
                <div class="space-y-8 pt-6">
                    <div class="bg-white shadow p-2 rounded w-32 text-center">Team A</div>
                    <div class="bg-white shadow p-2 rounded w-32 text-center">Team C</div>
                </div>

                <!-- Finale -->
                <div class="space-y-16 pt-16">
                    <div class="bg-green-100 shadow p-2 rounded w-32 text-center font-bold">Winnaar: Team A</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
