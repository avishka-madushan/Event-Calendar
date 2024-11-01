<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest; // Make sure the request class name matches
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(StoreEventRequest $request) {
        Event::create($request->validated());
        return redirect('events')->with('success', 'Event created successfully');
    }

    public function index() {
        $events = Event::all(); // Fetching events
        return view('event.index', compact('events'));
    }

    public function all(Request $request) { 
        return Event::all();
    }

    public function update(Request $request, $id) {
        $event = Event::findOrFail($id);
        $event->update($request->validated()); // Ensure you update with validated data
        return redirect('events')->with('success', 'Event updated successfully');
    }

    public function delete($id) {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect('events')->with('success', 'Event deleted successfully');
    }
}
