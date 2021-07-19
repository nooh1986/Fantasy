<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;


Route::get('/', function () {
    return view('Backend.login');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth:web'])->name('dashboard');


Route::group(['middleware' => 'auth:web'],function(){

    Route::resource('Player' , PlayerController::class);

});    



require __DIR__.'/auth.php';
