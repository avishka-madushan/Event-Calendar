<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeeventrequest;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller

{ 


    public function index(){
        return view('event.index',
            compact('events'));
    }


    public function delete($id){
        $event = Event::findOrFail($id);
        return $event->delete();

    }
}

