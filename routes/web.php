<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\RealtorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('clients', ClientController::class);
        Route::resource('offices', OfficeController::class);
        Route::resource('partners', PartnerController::class);
        Route::get('properties', [
            PropertiesController::class,
            'index',
        ])->name('properties.index');
        Route::post('properties', [
            PropertiesController::class,
            'store',
        ])->name('properties.store');
        Route::get('properties/create', [
            PropertiesController::class,
            'create',
        ])->name('properties.create');
        Route::get('properties/{properties}', [
            PropertiesController::class,
            'show',
        ])->name('properties.show');
        Route::get('properties/{properties}/edit', [
            PropertiesController::class,
            'edit',
        ])->name('properties.edit');
        Route::put('properties/{properties}', [
            PropertiesController::class,
            'update',
        ])->name('properties.update');
        Route::delete('properties/{properties}', [
            PropertiesController::class,
            'destroy',
        ])->name('properties.destroy');

        Route::resource('realtors', RealtorController::class);
        Route::resource('users', UserController::class);
    });
