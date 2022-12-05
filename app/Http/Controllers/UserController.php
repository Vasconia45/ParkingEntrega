<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;

class UserController extends Controller
{
    public function add(Request $request){
        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->dni = $request->dni;
        $usuario->email = $request->email;
        $usuario->save();
        return redirect('/user')->with(['successful_message' => 'The user has been added successfully.']);
    }

    public function showListUsers(){
        $users = User::all();
        return view('createusers', ['users' => $users]);
    }

    public function asign(Request $request){
        $user = User::where('name', $request->input('user'))
        ->first();
        $user_id = $user->id;
        $car = Car::where('plate', $request->input('car'))
        ->first();
        $car->user_id = $user_id;
        $car->save();
        return redirect('/asign')->with(['successful_message' => 'The asignment has been realized perfectly.']);
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return back();
    }

    public function showEdit($id){
        $users = User::find($id);
        return view('editUser', ['user' => $users]);
    }

    public function edit(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->dni = $request->dni;
        $user->save();
        return redirect('/user')->with(['successful_message' => "The user has been updated perfectly."]);
    }
}
