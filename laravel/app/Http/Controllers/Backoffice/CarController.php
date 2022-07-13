<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

Class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::paginate(5);

        $titleH2 = 'Nos voitures';

        return view('backoffice/carList', compact('titleH2', 'cars'));
    }

    public function add(Request $request)
    {
        return view('backoffice/carAdd');
    }

    public function show($id)
    {
        $car = Car::find($id);
    }

    public function destroy($id)
    {

    }
}
