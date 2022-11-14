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

    public function list(){

    }

    public function asign(){

    }

    public function delete($id){
        dd($id);
    }
}
