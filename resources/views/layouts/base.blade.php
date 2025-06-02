<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Schoolvoetbal
        </h1>
    </x-slot>

    <div class="py-12">

        <main class="mt-6">
            @yield('content')
        </main>
    </div>
</x-app-layout>
