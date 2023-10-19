<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DevelopersController;

Route::get('/', function () {
    return view('welcome');
});

// admin/developers
Route::get('admin/developers', [DevelopersController::class, 'index']);
