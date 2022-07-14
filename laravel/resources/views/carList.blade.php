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
        <a href="#">Connexion</a>
    </header>

    <main class="container">

        <h2>{{ $titleH2 }}</h2>

    <div class="carList-table">

        <table>
            <thead>
                <tr>
                    <th>photo</th>
                    <th>marque</th>
                    <th>modele</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                <td><img style="width:150px; height: auto;" src="images/{{ $car->photo }}" alt=""></td>
                <td>{{ $car->marque}}</td>
                <td>{{ $car->modele }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{ $cars->links() }}

</main>




</body>
</html>
