<x-front-layout>
    <x-slot name="slot">
        <!-- h2 title retrieve from the compact of the controller-->
        <h2>{{ $titleH2 }}</h2>

        <div class="carList-table">
            <!-- loop for retrieve datas from the db -->
            @foreach($cars as $car)

            <a href="<?= route('single.car', ['id'=>$car->id]) ?>">
                <div class="carList-Table__card max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
                        <img style="width:150px; height: auto;" src="images/{{ $car->picture }}" alt="">
                    </div>

                    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <div class="carList-Table__card__title text-gray-900 font-bold text-xl mb-2">{{ $car->brand}}</div>
                            <p class="carList-Table__card__model text-gray-700 text-base">{{ $car->model }}</p>
                        </div>

                    </div>
                </div>
            </a>
            @endforeach

        </div>
        <!-- display pagination button -->
        {{ $cars->links() }}
    </x-slot>
</x-front-layout>
