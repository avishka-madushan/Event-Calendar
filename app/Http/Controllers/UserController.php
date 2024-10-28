<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        return $user->update($request->all());
    }
}
