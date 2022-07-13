<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::paginate(5);

        $titleH2 = 'Nos voitures';

        return view('backoffice/carList', compact('titleH2', 'cars'));
    }

    public function addPage(Request $request)
    {
        return view('backoffice/carAdd');
    }

    public function addData(Request $request)
    {
        $request->validate([
            'car_brand' => 'required',
            'car_model' => 'required',
        ]);

        $query = DB::table('cars')->insert([
            'marque'=>$request->input('car_brand'),
            'modele'=>$request->input('car_model'),
            'puissance'=>$request->input('car_hp'),
            'année'=>$request->input('car_year'),
            'finition'=>$request->input('car_finition'),
            'description'=>$request->input('car_description'),
            'photo'=>$request->input('car_picture'),
            'prix'=>$request->input('car_price'),
        ]);

        if($query) {
            return back()->with('success', 'La voiture a bien été enregistrée !');
        } else {
            return back()->with('fail', 'Erreur d\'enregistrement !');
        }
    }

    public function show($id)
    {
        $car = Car::find($id);
    }

    public function destroy($id)
    {

    }
}
