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
        $cars = Car::all();

        $titleH2 = 'Nos voitures';

        return view('backoffice/carList', compact('titleH2', 'cars'));
    }

    public function addPage(Request $request)
    {
        return view('backoffice/carAdd');
    }

    public function addData(Request $request)
    {
        $file= $request->file('car_picture');
        if ($file) {
            $filename= date('YmdHis').$file->getClientOriginalName();
        }

        $request->validate([
            'car_brand' => 'required',
            'car_model' => 'required',
            'car_hp' => 'required',
            'car_year' => 'required',
            'car_finition' => 'required',
            'car_description' => 'required',
            'car_price' => 'required',
        ]);

        $car = new Car();
        $car->marque = $request->input('car_brand');
        $car->modele = $request->input('car_model');
        $car->puissance = $request->input('car_hp');
        $car->année = $request->input('car_year');
        $car->finition = $request->input('car_finition');
        $car->description = $request->input('car_description');
        $car->photo = $filename;
        $car->prix = $request->input('car_price');

        $file-> move(public_path('images'), $filename);
        $saved = $car->save();

        return redirect()->route('list.car');

        // if($saved) {
        //     return back()->with('success', 'La voiture a bien été enregistrée !');
        // } else {
        //     return back()->with('fail', 'Erreur d\'enregistrement !');
        // }
    }

    public function show($id)
    {
        $car = Car::find($id);
    }

    public function deleteData($id)
    {
        $data = Car::find($id);
        $data->delete();
        return redirect()->route('list.car');
    }
}
