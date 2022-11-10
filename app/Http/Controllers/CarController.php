<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

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
        $Rplate = $request->plate;
        $cars = Car::all();
        $plates = [];
        foreach($cars as $car){
            if(str_contains($car->plate, $Rplate)){
                 array_push($plates, $car);
            }
        }
        return view('layouts.searchcars', ['plates' => $plates]);
    }
}
