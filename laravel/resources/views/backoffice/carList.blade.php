<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/backoffice.css">
    <title>Liste de voitures
    </title>
</head>
<body>
    <header>
        <h1>BACKOFFICE</h1>
        <h2>{{ $titleH2 }}</h2>
        <a href="<?= route('add.car')?>"><button type="button" class="btn btn-success">Ajoutez un vehicule</button></a></div>
    </header>

    <main class="container-fluid">

        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
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
            <th scope="row">1</th>
            <td>{{ $car->marque}}</td>
            <td>{{ $car->modele }}</td>
            <td>{{ $car->puissance}}</td>
            <td>{{ $car->année }}</td>
            <td>{{ $car->finition }} </td>
            <td>{{ $car->description }}</td>
            <td> {{ $car->photo }} </td>
            <td> {{ $car->prix }} € </td>
            </tr>
            @endforeach

        </tbody>
        </table>

    </main>

</body>
</html>
