<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Liste de voitures
    </title>
</head>
<body>
    <header>
        <h1>6TEMATIKAR</h1>
    </header>

    <main>
    <table>
        <thead>
            <tr>
                <th>{{ $titleH2 }}</th>
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
