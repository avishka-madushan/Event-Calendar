<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest; // Make sure the request class name matches
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(){
        return view('event.create'); 
    }
    public function store(StoreEventRequest $request) {
        Event::create($request->validated());
        return redirect('event')->with('success', 'Event created successfully');
    }

    public function index(){
        $events = Event::all(); 
        return view('event.index', compact('events')); 
    }

    public function all() { 
        return Event::all();
    }

    public function update(Request $request, $id) {
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return redirect('event')->with('success', 'Event updated successfully');
    }

    public function edit($id){ 
        $event=Event::findOrFail($id); 
        return view('event.edit', compact('event'));
    }


    public function delete($id) {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect('event')->with('success', 'Event deleted successfully');
    }
}
