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
        if($request->brand == null && $request->model == null){
            return back()->with(['error_message' => 'At least one of the fields are empty. Please completed it.']);
        }else{
            $car->plate = $request->plate;
            $car->brand = $request->brand;
            $car->model = $request->model;
            $car->save();
            return redirect('/list')->with(['successful_message' => 'The car has been added successfully.']);
        }
    }

    public function delete($id){
        $car = Car::find($id);
        $car->delete();
        return back();
    }

    public function showEdit($id){
        $car = Car::find($id);
        return view('layouts.editCar', ['car' => $car]);
    }

    public function edit(Request $request, $id){
        $car = Car::find($id);
        $car->plate = $request->plate;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->save();
        return redirect('/list')->with(['successful_message' => "The car has been updated successfuly."]);
    }

    public function check(Request $request){
        $Rplate = $request->plate;
        if($Rplate == null){
            return back()->with(['error_message' => 'The search field is empty.']);
        }
        else{
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
}
