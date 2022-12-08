<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/cars', function(){
    $users = User::orderBy('lastname', 'ASC')
    ->get();
    foreach($users as $user){
        $cars = Car::where('user_id', $user->id)
        ->get();
        echo "El usuario " . $user->id . ":";
        foreach($cars as $car){
            echo $car;
        }
        echo "<br>";
    }
});

Route::get('/user/{id}', function($id){
    $user = User::find($id);
    return $user;
});

Route::get('/cars/latest', function(){
    $cars = Car::where('created_at', '<', now())
    ->limit(10)
    ->orderBy('created_at', 'DESC')
    ->get();
    return $cars;
});
