
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
Route::get('event', [EventController::class, 'index']);

// UPDATE_EVENTS
Route::get('event/{id}/edit', [EventController::class, 'edit']);

// DELETE_EVENTS
Route::delete('event/delete/{id}', [EventController::class, 'delete']);



// For event views
Route::get('event/create', [EventController::class, 'create']);
Route::post('event/update/{id}', [EventController::class, 'update']);
Route::get('event/{id}/get', [EventController::class, 'get']);