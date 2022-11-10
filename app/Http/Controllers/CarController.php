<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function show(){
        $cars = Car::all();
        return view('layouts.currentcars', ['cars' => $cars]);
    }

    public function showAddcar(){
        return view('layouts.newcars');
    }

    public function add(Request $request){
        $car = new Car;
        $car->plate = $request->plate;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->save();
        return redirect('/');
    }

    public function delete($id){
        $car = Car::find($id);
        $car->delete();
        return redirect('/');
    }
}
