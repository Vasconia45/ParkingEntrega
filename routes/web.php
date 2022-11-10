<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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
//Route to add a new car into the database
Route::post('/car', [CarController::class, 'add'])->name('car.add');
//Route to the delete a car from the database
Route::delete('/car/{id}', [CarController::class, 'delete'])->name('car.delete');



//Routes for the yield/section part
Route::view('/car', 'layouts.newcars')->name('addcar');
Route::get('/list', [CarController::class, 'showListCars'])->name('listcar');
Route::view('/search', 'layouts.searchcars')->name('searchcar');

//Route for searching cars
Route::post('/search', [CarController::class, 'check'])->name('car.search');