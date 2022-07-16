<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste de Voitures') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Vous êtes connecté !
                </div>
            </div>
        </div>
    </div>
    <x-slot name="slot">

        <a href="<?= route('add.car') ?>"><button type="button" class="carList_button">Ajoutez un vehicule</button></a>

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Marque</th>
                        <th scope="col" class="py-3 px-6">Modéle</th>
                        <th scope="col" class="py-3 px-6">Puissance</th>
                        <th scope="col" class="py-3 px-6">Année</th>
                        <th scope="col" class="py-3 px-6">Finition</th>
                        <th scope="col" class="py-3 px-6">Description</th>
                        <th scope="col" class="py-3 px-6">Photo</th>
                        <th scope="col" class="py-3 px-3">Prix</th>
                        <th scope="col" class="py-3 px-6">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $car->marque}}
                        </th>
                        <td class="py-4 px-6">
                            {{ $car->modele }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $car->puissance}}
                        </td>
                        <td class="py-4 px-6">
                            {{ $car->année }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $car->finition }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $car->description }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $car->photo }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $car->prix }} €
                        </td>
                        <td class="py-4 px-6">
                            <a href="cars/delete/{{$car->id}}">Supprimer</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </x-slot>
</x-app-layout>
