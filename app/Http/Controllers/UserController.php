<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            // Add validation rules here
        ]);
        User::create($request->validated());
        return redirect('users')->with('success', 'User created successfully');
    }

    public function index() {
        $users = User::all(); // Fetch all users
        return view('user.index', compact('users'));
    }

    public function all(Request $request) { 
        return User::all();
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->update($request->validated());
        return redirect('users')->with('success', 'User updated successfully');
    }

    public function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('users')->with('success', 'User deleted successfully');
    }
}
