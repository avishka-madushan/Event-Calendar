<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
  
    public function index(){
        return view('user.index',
            compact('users'));
    }
    public function all(request $request) 
    { 
        Event::all();
    }
}
