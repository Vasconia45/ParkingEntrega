<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use DB;

class CarController extends Controller
{

    public function showListCars(){
        $cars = Car::all();
        return view('layouts.currentcars',  ['cars' => $cars]);
    }

    public function add(Request $request){
        $car = new Car;
        $car->plate = $request->plate;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->save();
        return redirect('/list');
    }

    public function delete($id){
        $car = Car::find($id);
        $car->delete();
        return back();
    }

    public function check(Request $request){
        $plates = DB::table('cars')
            ->where('plate', $request->plate)
            ->get();
        foreach($plates as $plate){
            dd($plate);
        }
    }
}
