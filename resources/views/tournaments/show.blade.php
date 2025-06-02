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
    <div class="flex justify-center gap-16 relative">
        <!-- Ronde 1 -->
        <div class="flex flex-col gap-20 relative">
            <div class="relative flex items-center justify-center w-32 h-12 bg-white shadow rounded">
                <span>Team A</span>
                <div class="absolute right-[-2rem] top-1/2 h-0.5 w-8 bg-gray-400"></div>
            </div>
            <div class="relative flex items-center justify-center w-32 h-12 bg-white shadow rounded">
                <span>Team B</span>
                <div class="absolute right-[-2rem] top-1/2 h-0.5 w-8 bg-gray-400"></div>
            </div>
        </div>

        <!-- Ronde 2 -->
        <div class="flex flex-col justify-center gap-20 relative">
            <div class="relative flex items-center justify-center w-32 h-12 bg-white shadow rounded">
                <span>Winner 1</span>
                <div class="absolute right-[-2rem] top-1/2 h-0.5 w-8 bg-gray-400"></div>
                <div class="absolute left-[-2rem] top-[-5rem] h-40 w-0.5 bg-gray-400"></div>
            </div>
        </div>

        <!-- Finale -->
        <div class="flex flex-col justify-center">
            <div class="flex items-center justify-center w-32 h-12 bg-white shadow rounded">
                <span>Champion</span>
            </div>
        </div>
    </div>
</div>
@endsection
