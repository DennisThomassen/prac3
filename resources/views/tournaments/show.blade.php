@extends('layouts.base')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <h2 class="text-2xl font-bold mb-4">{{ $tournament->name }}</h2>
        <p><strong>Rondes:</strong> {{ $tournament->rounds }}</p>
        <p><strong>Deelnemende teams:</strong> {{ $tournament->teams_competing }}</p>
        <p><strong>Prijzengeld:</strong> €{{ $tournament->prize_amount }}</p>
    </div>

    {{-- Bracket visualisatie --}}
    <div class="overflow-x-auto bg-gray-100 rounded-lg p-6">
        <h3 class="text-xl font-semibold mb-6">Toernooi Schema</h3>
        <div class="flex space-x-16">
            {{-- Round 1 --}}
            <div class="flex flex-col space-y-16">
                <div class="relative">
                    <div class="bg-white p-4 rounded shadow text-center">Team A</div>
                    <div class="absolute right-0 top-1/2 w-8 h-0.5 bg-gray-500 transform translate-x-full"></div>
                </div>
                <div class="relative">
                    <div class="bg-white p-4 rounded shadow text-center">Team B</div>
                    <div class="absolute right-0 top-1/2 w-8 h-0.5 bg-gray-500 transform translate-x-full"></div>
                </div>
            </div>

            {{-- Round 2 --}}
            <div class="flex flex-col justify-center space-y-16 relative">
                <div class="relative">
                    <div class="bg-white p-4 rounded shadow text-center">Winner 1</div>

                    <div class="absolute left-0 top-0 h-full w-0.5 bg-gray-500 transform -translate-x-1/2"></div>
                    <div class="absolute left-0 top-1/2 w-8 h-0.5 bg-gray-500 transform -translate-x-full"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
