<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
   
    public function update(Request $request, $id){
        $event = Event::findOrFail($id);
        return $event->update($request->all());
    }
}

