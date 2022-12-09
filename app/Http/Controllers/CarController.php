<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;

class CarController extends Controller
{

    public function showListCars(){
        $cars = Car::all();
        $users = User::all();
        return view('currentcars',  ['cars' => $cars]);
    }

    public function showCars(){
        $users = User::all();
        return view('newcars', ['users' => $users]);
    }

    public function add(CarRequest $request){
        $car = new Car;
        if($request->brand == null && $request->model == null){
            return back()->with(['error_message' => 'At least one of the fields are empty. Please completed it.']);
        }else{
            $car->plate = $request->plate;
            $car->brand = $request->brand;
            $car->model = $request->model;
            $car->user_id = $request->user_id;
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
        return view('editCar', ['car' => $car]);
    }

    public function edit(CarRequest $request, $id){
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
            return view('searchcars', ['plates' => $plates]);
        }
    }

    public function searchcarUser(){
        $users = User::all();
        return view('searchCarUser', ['users' => $users]);
    }

    public function searchingcarUser(Request $request){
        $x = $request->user_id;
        $users = User::all();
        return view('searchCarUser', ['users' => $users, 'x' => $x]);
    }

    public function searchingCarDate(Request $request){
        $cars = Car::where('created_at', $request->date)
        ->get();
        dd($cars);
        /*$cars = Car::where('created_at', '<', now())
    ->limit(10)
    ->orderBy('created_at', 'DESC')
    ->get();
    return $cars;*/
    }
}
