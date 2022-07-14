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
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <x-slot name="slot">

        <a href="<?= route('add.car')?>"><button type="button" class="btn btn-success">Ajoutez un vehicule</button></a>

        <table class="table-auto">
        <thead>
            <tr>
            <th scope="col">Marque</th>
            <th scope="col">Modèle</th>
            <th scope="col">Puissance</th>
            <th scope="col">Année</th>
            <th scope="col">Finition</th>
            <th scope="col">Description</th>
            <th scope="col">Photo</th>
            <th scope="col">Prix</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
            <td>{{ $car->marque}}</td>
            <td>{{ $car->modele }}</td>
            <td>{{ $car->puissance}}</td>
            <td>{{ $car->année }}</td>
            <td>{{ $car->finition }} </td>
            <td>{{ $car->description }}</td>
            <td> {{ $car->photo }} </td>
            <td> {{ $car->prix }} € </td>
            <td><a href="cars/delete/{{$car->id}}">Supprimer</a></td>
            </tr>
            @endforeach

        </tbody>
        </table>

    </x-slot>
</x-app-layout>

