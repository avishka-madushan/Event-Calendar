<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeuserrequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(storeuserrequest $request){
        User::create( $request->validated());
        return redirect('users')->with('success','user created succesfully');
    }

    public function index(){
        return view('user.index',
            compact('users'));
    }
}
