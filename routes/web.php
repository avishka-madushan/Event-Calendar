<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// CREATE_EVENTS
Route::post('event/store', [EventController::class, 'store']);

// READ_EVENTS
Route::get('event/all', [EventController::class, 'all']);

// UPDATE_EVENTS
Route::post('event/{id}', [EventController::class, 'update']);

// DELETE_EVENTS
Route::delete('event/{id}', [EventController::class, 'delete']);

// CREATE_USER
Route::post('user/store', [UserController::class, 'store']);

// READ_A_USER
Route::get('user/all', [UserController::class, 'all']);

// UPDATE_A_USER
Route::post('user/{id}', [UserController::class, 'update']);

// DELETE_A_USER
Route::delete('user/{id}', [UserController::class, 'delete']);

// For user views
Route::get('user', [UserController::class, 'index']);
Route::get('employee/create', [UserController::class, 'create']);
Route::get('employee/{id}/edit', [UserController::class, 'edit']);
Route::get('user/{id}/get', [UserController::class, 'get']); 

// For event views
Route::get('event', [EventController::class, 'index']);
Route::get('event/create', [EventController::class, 'create']);
Route::get('event/{id}/edit', [EventController::class, 'edit']);
Route::get('event/{id}/get', [EventController::class, 'get']);
