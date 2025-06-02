<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Schoolvoetbal
        </h1>
    </x-slot>

    <div class="py-12">
        <nav class="flex justify-center gap-4 py-6">
            <a href="{{ route('teams.index') }}" class="p-3 text-gray-900 bg-gray-100 rounded hover:bg-gray-200">
                Home
            </a>
            <a href="{{ route('teams.create') }}" class="p-3 text-gray-900 bg-gray-100 rounded hover:bg-gray-200">
                Team Toevoegen
            </a>
        </nav>
        <main class="mt-6">
            @yield('content')
        </main>
    </div>
</x-app-layout>
