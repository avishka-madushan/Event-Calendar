<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeeventrequest;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{   public function store(storeeventrequest $request){
        Event::create( $request->validated());
        return redirect('events')->with('success','event created succesfully');}

    public function index(){
        return view('event.index',
            compact('events'));
    }

    public function delete($id){
        $event = Event::findOrFail($id);
        return $event->delete();
    }
}

