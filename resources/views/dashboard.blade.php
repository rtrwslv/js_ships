<x-app-layout>
    <x-slot name="header">
        <div class="mt-5">
            <input type="text" class="form-input rounded-md shadow-sm block w-full" placeholder="Поиск...">
        </div>
    </x-slot>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="generatedCards" class="grid grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-8 p-4"></div>
            </div>
        </div>
    </div>
    @vite(['resources/js/generate_cards_dashboard.js'])
</x-app-layout>
