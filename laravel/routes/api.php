<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// user CRUD
Route::post('user', [UserController::class, 'create']);
Route::get('user', [UserController::class, 'fetch']);
Route::put('user', [UserController::class, 'update']);
Route::delete('user', [UserController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
