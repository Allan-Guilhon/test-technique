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
            @auth
            <a href="<?= route('list.car') ?>">Backoffice</a>
            @else
            <!--connexion link to access the backoffice-->
            <a href="<?= route('login') ?>">Connexion</a>
            <!--register link to create use-->
            <a href="<?= route('register') ?>">Enregistrement</a>
            @endauth
        </div>
    </header>

    <main class="container">
        {{ $slot }}

    </main>

</body>

</html>
