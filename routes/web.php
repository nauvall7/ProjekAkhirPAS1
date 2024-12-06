<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FurnitureController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk furniture
Route::get('furniture', [FurnitureController::class, "index"]);
