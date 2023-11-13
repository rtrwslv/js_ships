<x-app-layout>
    <x-slot name="header">
        <div class="mt-5 flex justify-center">
            <button id="searchButton" class="bg-gray-300 rounded-r-none rounded-l-md px-4 py-2 mx-0 outline-none w-32" onclick="toggleSection('search')">Поиски</button>
            <button id="favoriteButton" class="bg-transparent rounded-l-none rounded-r-md px-4 py-2 mx-0 outline-none w-32" onclick="toggleSection('favorite')">Избранное</button>
        </div>
    </x-slot>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="searchResults" class="w-7/10 mx-auto bg-white p-6 rounded-md mt-4 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Здесь будут показаны сохраненные поиски пользователя -->
            </div>
            <div id="favorites" class="w-7/10 mx-auto bg-transparent p-6 rounded-md mt-4 overflow-hidden shadow-sm sm:rounded-lg hidden">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="generatedCards" class="grid grid-cols-4 md:grid-cols-4 lg:grid-cols-1 gap-1 p-4"></div>
            </div>
            </div>
        </div>
    </div>
    @vite(['resources/js/generate_cards_favorites.js'])
    <script>
        function toggleSection(section) {
            const searchButton = document.getElementById('searchButton');
            const favoriteButton = document.getElementById('favoriteButton');
            const searchResults = document.getElementById('searchResults');
            const favorites = document.getElementById('favorites');

            if (section === 'search') {
                searchButton.classList.add('bg-gray-300');
                favoriteButton.classList.remove('bg-gray-300');
                searchButton.classList.remove('bg-transparent');
                favoriteButton.classList.add('bg-transparent');

                searchResults.classList.remove('hidden');
                favorites.classList.add('hidden');
            } else if (section === 'favorite') {
                favoriteButton.classList.add('bg-gray-300');
                searchButton.classList.remove('bg-gray-300');
                favoriteButton.classList.remove('bg-transparent');
                searchButton.classList.add('bg-transparent');

                favorites.classList.remove('hidden');
                searchResults.classList.add('hidden');
            }
        }

        // Показывать поисковый раздел по умолчанию
        toggleSection('search');
    </script>
</x-app-layout>
