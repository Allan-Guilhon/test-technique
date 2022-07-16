<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class CarController extends Controller
{

    /**
     * Retrieve all cars data in db with pagination
     * return the view with compact for retrieve datas in the front page
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $cars = Car::all();

        $titleH2 = 'Nos voitures';

        return view('backoffice/carList', compact('titleH2', 'cars'));
    }

    /**
     * Return the addpage view
     *
     * @param Request $request
     * @return void
     */
    public function addPage(Request $request)
    {
        return view('backoffice/carAdd');
    }

    /**
     * Record a new car data in the db from the form
     *
     * @param Request $request
     * @return void
     */
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
        $car->brand = $request->input('car_brand');
        $car->model = $request->input('car_model');
        $car->hp = $request->input('car_hp');
        $car->year = $request->input('car_year');
        $car->finishes = $request->input('car_finition');
        $car->description = $request->input('car_description');
        $car->picture = $filename;
        $car->price = $request->input('car_price');

        $file-> move(public_path('images'), $filename);
        $saved = $car->save();

        return redirect()->route('list.car');

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
    }

    /**
     * delete car data from the db
     *
     * @param [type] $id
     * @return void
     */
    public function deleteData($id)
    {
        $data = Car::find($id);
        $data->delete();
        return redirect()->route('list.car')->with("message", [
            'type' => 'success',
            'text' => 'la voiture ' . $id . ' a été supprimé'
        ]);
    }
}
