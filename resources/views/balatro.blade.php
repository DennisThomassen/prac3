@extends('layouts.base')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col items-center space-y-8">
        <div class="flex justify-between w-full max-w-4xl">
            <!-- Ronde 1 -->
            <div class="space-y-4">
                <img src="{{ asset('images/blueprint.webp') }}" alt="Logo in WebP format">
                <img src="{{ asset('images/blueprint.webp') }}" alt="Logo in WebP format">
                <img src="{{ asset('images/blueprint.webp') }}" alt="Logo in WebP format">
                <img src="{{ asset('images/blueprint.webp') }}" alt="Logo in WebP format">
            </div>

            <!-- Ronde 2 -->
            <div class="space-y-8 pt-6">
                <img src="{{ asset('images/blueprint.webp') }}" alt="Logo in WebP format">
                <img src="{{ asset('images/blueprint.webp') }}" alt="Logo in WebP format">
            </div>

            <!-- Finale -->
            <div class="space-y-16 pt-16">
                <img src="{{ asset('images/blueprint.webp') }}" alt="Logo in WebP format">
            </div>
        </div>
    </div>
</div>
