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
}
