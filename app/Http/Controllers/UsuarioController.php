<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Car;

class UsuarioController extends Controller
{
    public function add(Request $request){
        $usuario = new Usuario;
        $usuario->name = $request->name;
        $usuario->dni = $request->dni;
        $usuario->save();
        return redirect('/user')->with(['successful_message' => 'The user has been added successfully.']);
    }

    public function showListUsers(){
        $users = Usuario::all();
        return view('layouts.createusers', ['users' => $users]);
    }

    public function show(){
        $cars = Car::all();
        $usuarios = Usuario::all();
        return view('layouts.asignuserstocars', ['cars' => $cars], ['users' => $usuarios]);
    }

    public function asign(Request $request){
        $user = Usuario::where('name', $request->input('user'))
        ->first();
        $user_id = $user->id;
        $car = Car::where('plate', $request->input('car'))
        ->first();
        $car->user_id = $user_id;
        $car->save();
        return redirect('/asign')->with(['successful_message' => 'The asignment has been realized perfectly.']);
    }

    public function delete($id){
        $user = Usuario::find($id);
        $user->delete();
        return back();
    }

    public function showEdit($id){
        $users = Usuario::find($id);
        return view('layouts.editUser', ['user' => $users]);
    }

    public function edit(Request $request, $id){
        $user = Usuario::find($id);
        $user->name = $request->name;
        $user->dni = $request->dni;
        $user->save();
        return redirect('/user')->with(['successful_message' => "The user has been updated perfectly."]);
    }
}
