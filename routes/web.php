<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\ContactController;
use App\Http\Controllers\Firebase\ParkingController;

//Routes for Testing 
Route::get('contacts', [ContactController::class, 'index']);
Route::get('add-contact', [ContactController::class, 'create']);
Route::post('add-contact', [ContactController::class, 'store']);
Route::get('edit-contact/{id}', [ContactController::class, 'edit']);
Route::put('update-contact/{id}', [ContactController::class, 'update']);
Route::get('delete-contact/{id}', [ContactController::class, 'destroy']);

//Routes for PARKING APP
Route::get('home', [ParkingController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
