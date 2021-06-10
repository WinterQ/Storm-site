<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::get('/',[App\Http\Controllers\BrandController::class,'index']);
Route::get('/brand/{brand}',[App\Http\Controllers\BrandController::class,'show'])->name('brand-show');
Route::get('/brand/model/{modelcar}',[CarController::class,'carsForModel'])->name('cars-model');
Route::get('/cars',[CarController::class,'cars'])->name('cars-all');
Route::get('/carsAll',[CarController::class,'carsAll'])->name('all-cars');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('car', \App\Http\Controllers\Admin\CarController::class);
    Route::resource('brand',App\Http\Controllers\Admin\BrandController::class);
    Route::resource('model',App\Http\Controllers\Admin\ModelController::class);
    Route::resource('color',App\Http\Controllers\Admin\ColorController::class);
    Route::resource('actuator',App\Http\Controllers\Admin\ActuatorController::class);
    Route::resource('transmission',App\Http\Controllers\Admin\TransmissionController::class);
});
