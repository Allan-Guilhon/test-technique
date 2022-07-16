<x-front-layout>
    <x-slot name="slot">

        <div class="carList-single">
                <div class="carList-single__card max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
                        <img style="width:450px; height: auto;" src="{{ URL::to('/') }}/images/{{ $car->picture }}" alt="">
                    </div>

                    <div class=" border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <!-- all the datas are retrieve from the db with the car id-->
                            <div class="carList-single__card__description">{{ $car->brand }}</div>
                            <p class="carList-single__card__description">{{ $car->model }}</p>
                            <p class="carList-single__card__description">Puissance : {{ $car->hp}} cv</p>
                            <p class="carList-single__card__description">Année : {{ $car->year }}</p>
                            <p class="carList-single__card__description">Finition : {{ $car->finishes }}</p>
                            <p class="carList-single__card__description">Description : {{ $car->description }}</p>
                            <p class="carList-single__card__description">Prix : {{ $car->price }} €</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="home-button">
            <a href="/">Retour à l'accueil</a>
        </div>

    </x-slot name="slot">
</x-front-layout>
