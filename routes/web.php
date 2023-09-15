<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 
    config('jetstream.auth_session'), 'verified', ])
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::get('/properties', function () {
            return view('properties.properties');
        })->name('properties');
        
    Route::controller(App\Http\Controllers\UserVerifiedController::class)
        ->group(function () {
            Route::get('/properties/add-property', 'addproperty')->name('add.property');
        });

});
