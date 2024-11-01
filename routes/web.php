<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//CREATE_EVENTS
Route::post('event/store', [EventController::class, 'store']);

//READ_EVENTS
Route::get('event/all', [EventController::class, 'all']);

//UPDATE_EVENTS
Route::post('event/{id}', [EventController::class, 'update']);

//DELETE_EVENTS
Route::delete('event/{id}', [EventController::class, 'delete']);


//CREATE_USER
Route::post('user/store', [UsersController::class, 'store']);

//READ_A_USER
Route::get('user/all', [UsersController::class, 'all']);

//UPDATE_A_USER
Route::post('user/{id}', [UsersController::class, 'update']);

//DELETE_A_USER
Route::delete('user/{id}', [UsersController::class, 'delete']);


// For views
Route::get('user', [UsersController::class, 'index']);
Route::get('employee/create', [UsersController::class, 'create']);
Route::get('employee/{id}/edit', [UsersController::class, 'edit']);
Route::get('user/{id}/get', [UsersController::class, 'get']); 


// For views
Route::get('event', [UsersController::class, 'index']);
Route::get('event/create', [UsersController::class, 'create']);
Route::get('event/{id}/edit', [UsersController::class, 'edit']);
Route::get('event/{id}/get', [UsersController::class, 'get']);

//CREATE_EVENTS
Route::post('event/store', [EventController::class, 'store']);

//READ_EVENTS
Route::get('event/all', [EventController::class, 'all']);

//UPDATE_EVENTS
Route::post('event/{id}', [EventController::class, 'update']);

//DELETE_EVENTS
Route::delete('event/{id}', [EventController::class, 'delete']);


//CREATE_USER
Route::post('user/store', [UsersController::class, 'store']);

//READ_A_USER
Route::get('user/all', [UsersController::class, 'all']);

//UPDATE_A_USER
Route::post('user/{id}', [UsersController::class, 'update']);

//DELETE_A_USER
Route::delete('user/{id}', [UsersController::class, 'delete']);


// For views
Route::get('user', [UsersController::class, 'index']);
Route::get('employee/create', [UsersController::class, 'create']);
Route::get('employee/{id}/edit', [UsersController::class, 'edit']);
Route::get('user/{id}/get', [UsersController::class, 'get']); 


// For views
Route::get('event', [UsersController::class, 'index']);
Route::get('event/create', [UsersController::class, 'create']);
Route::get('event/{id}/edit', [UsersController::class, 'edit']);
Route::get('event/{id}/get', [UsersController::class, 'get']);