<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/san', function () {
    return view('welcome');
});

Route::get('/profilepage', [ProfileController::class, 'index'])->name('profilepage');
