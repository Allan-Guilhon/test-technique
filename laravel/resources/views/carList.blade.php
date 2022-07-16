<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Liste de voitures
    </title>
</head>

<body>
    <header>
        <h1>6TEMATIKAR</h1>
        <div class="loginStyle">
        <a href="<?= route('dashboard') ?>">Connexion</a>
        <a href="<?= route('register') ?>">Enregistrement</a>
        </div>
    </header>

    <main class="container">

        <h2>{{ $titleH2 }}</h2>

        <div class="carList-table">

            @foreach($cars as $car)

                <a href="single/ <?= $car->id ?>"><div class="carList-Table__card max-w-sm w-full lg:max-w-full lg:flex">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
                    <img style="width:150px; height: auto;" src="images/{{ $car->photo }}" alt="">
                </div>

                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="carList-Table__card__title text-gray-900 font-bold text-xl mb-2">{{ $car->marque}}</div>
                        <p class="carList-Table__card__model text-gray-700 text-base">{{ $car->modele }}</p>
                    </div>

                </div>
            </div></a>
            @endforeach

        </div>

        {{ $cars->links() }}

    </main>

</body>

</html>
