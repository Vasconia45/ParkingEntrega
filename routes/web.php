<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', "index")->name('car.show');
//Routes for the yield/section part
Route::view('/search', 'searchcars')->name('searchcar');

Route::controller(CarController::class)->group(function(){
    //Route to add a new car into the database
    Route::post('/car', 'add')->name('car.add');
    //Route to the delete a car from the database
    Route::delete('/car/{id}','delete')->name('car.delete');
    //Route to update a car
    Route::put('/car/{id}', 'edit')->name('car.edit');
    Route::get('/car/{id}', 'showEdit')->name('editcar');
    Route::get('/list', 'showListCars')->name('listcar');
    //Route for searching cars
    Route::post('/search', 'check')->name('car.search');
    //Route to create cars
    Route::get('/car', 'showCars')->name('addcar');
    //Route for searching car for user
    Route::get('/search/user', 'searchcarUser')->name('searchcarUser');
    Route::post('/search/user', 'searchingcarUser')->name('searchingcarUser');
    Route::post('/search/date', 'searchingCarDate')->name('searchingCarDate');
});


Route::controller(UserController::class)->group(function(){
    //Route for creating users
    Route::get('/user', 'showListUsers')->name('showListUsers');
    Route::post('/user', 'add')->name('user.add');
    Route::delete('/user/{id}', 'delete')->name('user.delete');
    Route::put('/user/{id}/edit', 'edit')->name('user.edit');
    Route::get('/user/{id}', 'showEdit')->name('edituser');

    //Route to asign user to car
    Route::get('/asign', 'show')->name('asigncar');
    Route::post('/asign', 'asign')->name('asigncartouser');
});