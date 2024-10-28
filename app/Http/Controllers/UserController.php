<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function store( $request){
        User::create( $request->validated());
        return redirect('users')->with('success','user created succesfully');
    }   

    public function index(){
        $users = User::all(); // Added to fetch users
        return view('user.index', compact('users'));
    }

    public function all(Request $request) 
    { 
        return User::all();
    }

     public function update(Request $request, $id){
        $user = User::findOrFail($id);
        return $user->update();
    }

    public function delete($id){
        $user = User::findOrFail($id);
        return $user->delete();
    }
}
