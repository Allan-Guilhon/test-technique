<?php

namespace App\Http\Controllers;

use App\Models\Car;

Class CarController extends Controller
{
    public function index()
    {

        $cars = Car::simplepaginate(5);

        $titleH2 = 'Nos voitures';

        return view('carList', compact('titleH2', 'cars'));

    }
}
