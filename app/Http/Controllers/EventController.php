<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeeventrequest;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function update(Request $request, $id){
        $event = Event::findOrFail($id);
        return $event->delete();
    }
}

