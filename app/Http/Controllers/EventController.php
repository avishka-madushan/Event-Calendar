<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
     public function update(Request $request, $id){
        $event = Event::findOrFail($id);
        return $event->delete();
    }

    public function store(storeeventrequest $request){
        Event::create( $request->validated());
        return redirect('events')->with('success','event created succesfully');
    }
    public function index(){
        $events = Event::all(); // Fetching events
        return view('event.index', compact('events'));
    }

    public function all(Request $request) 
    { 
        return Event::all();
    }

    public function delete($id){
        $event = Event::findOrFail($id);
        return $event->delete();
    }
}
