<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\FormulaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Routing\Route as RoutingRoute;


Route::get('/', function () {return view('Backend.login');})->name('login');



Route::group(['middleware' => 'auth:web'],function(){
 
    Route::resource('Player' , PlayerController::class)->middleware(['role:ادمن']);

    Route::post('update' , [PlayerController::class , 'update_password'])->name('update');

    Route::resource('Role' , RoleController::class)->middleware(['role:ادمن']);

    Route::resource('Result' , ResultController::class)->middleware(['role:ادمن|مسجل نتائج']);
    
    Route::resource('Formula' , FormulaController::class);

    Route::post('Round' , [FormulaController::class , 'round_result'])->name('round');

    Route::get('Ranking' , [FormulaController::class , 'ranking'])->name('Ranking');

    Route::get('/dashboard' , [DashboardController::class , 'top'])->name('dashboard');

    Route::get('/record' , [DashboardController::class , 'record'])->name('record');

});    



require __DIR__.'/auth.php';
