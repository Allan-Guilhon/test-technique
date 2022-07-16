<?php

namespace App\Http\Controllers;

use App\Models\Car;

Class CarController extends Controller
{

    /**
     * Retrieve all cars data in db with pagination
     * return the view with compact for retrieve datas in the front page
     *
     * @return void
     */
    public function index()
    {

        $cars = Car::simplepaginate(8);

        $titleH2 = 'Nos voitures';

        return view('carList', compact('titleH2', 'cars'));

    }

    /**
     * Retrieve car data by id
     *
     * @param [type] $id
     * @return void
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('singleCar', compact('car'));
    }
}
