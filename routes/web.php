<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;


Route::get('/', function () {
    return view('Backend.login');
});

Route::get('/dashboard1', function () {
    return view('Backend.dashboard');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);


Route::resource('Player' , PlayerController::class);

require __DIR__.'/auth.php';
