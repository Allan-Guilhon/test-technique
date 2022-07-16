<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('6TEMATIKAR') }}
        </h2>
    </x-slot>
    <!-- welcome page from the backoffice-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                </div>
            </div>
        </div>
    </div>
    <x-slot name="slot">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenue dans le backoffice') }}
        </h2>
    </x-slot>
</x-app-layout>
