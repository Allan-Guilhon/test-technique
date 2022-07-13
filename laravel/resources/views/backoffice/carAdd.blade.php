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
        <h2>Ajoutez un vehicule</h2>
    </header>

    <main class="container">

    @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success')}}
        </div>
    @endif

    @if(Session::get('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail')}}
    </div>
    @endif

    <form action="" method="post">

    @csrf

    <div class="mb-3">
        <label for="car_brand" class="form-label">Marque</label>
        <input type="text" class="form-control" id="car_brand" name="car_brand" placeholder="Marque du vehicule">
        <span style="color:red">@error('car_brand'){{message}} @enderror</span>
    </div>

    <div class="mb-3">
        <label for="car_model" class="form-label">Modèle</label>
        <input type="text" class="form-control" id="car_model" name="car_model" placeholder="Modèle du vehicule">
        <span style="color:red">@error('car_model'){{message}} @enderror</span>
    </div>

    <div class="mb-3">
        <label for="car_hp" class="form-label">Puissance (cv)</label>
        <input type="text" class="form-control" id="car_hp" name="car_hp" placeholder="Puissance du vehicule">
    </div>

    <div class="mb-3">
        <label for="car_year" class="form-label">Année</label>
        <input type="text" class="form-control" id="car_year" name="car_year" placeholder="Année du vehicule">
    </div>

    <div class="mb-3">
        <label for="car_finition" class="form-label">Finition</label>
        <input type="text" class="form-control" id="car_finition" name="car_finition" placeholder="Finition du vehicule">
    </div>

    <div class="mb-3">
        <label for="car_description" class="form-label">Description</label>
        <textarea class="form-control" id="car_description" rows="3" name="car_description" placeholder="Description du vehicule"></textarea>
    </div>

    <div class="mb-3">
        <label for="car_picture" class="form-label">Photo</label>
        <input type="file" class="form-control" id="car_picture" name="car_picture">
    </div>

    <div class="mb-3">
        <label for="car_price" class="form-label">Prix</label>
        <input type="text" class="form-control" id="car_price" name="car_price" placeholder="Prix du vehicule">
    </div>

    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Enregistrer</button>
  </div>
</form>

</main>

</body>
</html>
