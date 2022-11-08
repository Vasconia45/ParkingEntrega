<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function add(Request $request){
        $car = new Car;
        $car->plate = $request->plate;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->save();
        return back();
    }
}
