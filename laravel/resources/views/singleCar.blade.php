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
        <div class="loginStyle">
        <a href="<?= route('dashboard') ?>">Connexion</a>
        <a href="<?= route('register') ?>">Enregistrement</a>
        </div>
    </header>

    <div class="carList-single">
        <a href="">
            <div class="carList-single__card max-w-sm w-full lg:max-w-full lg:flex">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
                    <img style="width:450px; height: auto;" src="{{ URL::to('/') }}/images/{{ $car->photo }}" alt="">
                </div>

                <div class=" border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="carList-single__card__description">{{ $car->marque }}</div>
                        <p class="carList-single__card__description">{{ $car->modele }}</p>
                        <p class="carList-single__card__description">Puissance : {{ $car->puissance}} cv</p>
                        <p class="carList-single__card__description">année : {{ $car->année }}</p>
                        <p class="carList-single__card__description">Finition : {{ $car->finition }}</p>
                        <p class="carList-single__card__description">Description : {{ $car->description }}</p>
                        <p class="carList-single__card__description">Prix : {{ $car->prix }} €</p>
                    </div>

                </div>
            </div>
        </a>
    </div>
</body>

</html>
