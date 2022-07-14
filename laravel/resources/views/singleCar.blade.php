<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>

    <header>
        <h1>6TEMATIKAR</h1>
        <a href="<?= route('dashboard') ?>">Connexion</a>
    </header>

    <div class="carList-single">
        <a href="">
            <div class="carList-single__card max-w-sm w-full lg:max-w-full lg:flex">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
                    <img style="width:300px; height: auto;" src="images/<?= $car->photo ?>" alt="">
                </div>

                <div class=" border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="carList-single__card__description text-gray-900 font-bold text-xl mb-2">{{ $car->marque}}</div>
                        <p class="carList-single__card__description text-gray-700 text-base">{{ $car->modele }}</p>
                        <p class="carList-single__card__description text-gray-700 text-base">Puissance : {{ $car->puissance}} cv</p>
                        <p class="carList-single__card__description text-gray-700 text-base">année : {{ $car->année }}</p>
                        <p class="carList-single__card__description text-gray-700 text-base">Finition : {{ $car->finition }}</p>
                        <p class="carList-single__card__description text-gray-700 text-base">Description : {{ $car->description }}</p>
                        <p class="carList-single__card__description text-gray-700 text-base">Prix : {{ $car->prix }} €</p>
                    </div>

                </div>
            </div>
        </a>
    </div>
</body>

</html>
