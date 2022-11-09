<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function show(){
        $cars = Car::all();
        return view('index', ['cars' => $cars]);
    }

    public function add(Request $request){
        $car = new Car;
        $car->plate = $request->plate;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->save();
        return back();
    }

    public function delete($id){
        $car = Car::find($id);
        $car->delete();
        return redirect('/');
    }
}
