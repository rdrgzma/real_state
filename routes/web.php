<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\RealtorController;
use App\Http\Controllers\PropertiesController;

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
        Route::get('all-properties', [
            PropertiesController::class,
            'index',
        ])->name('all-properties.index');
        Route::post('all-properties', [
            PropertiesController::class,
            'store',
        ])->name('all-properties.store');
        Route::get('all-properties/create', [
            PropertiesController::class,
            'create',
        ])->name('all-properties.create');
        Route::get('all-properties/{properties}', [
            PropertiesController::class,
            'show',
        ])->name('all-properties.show');
        Route::get('all-properties/{properties}/edit', [
            PropertiesController::class,
            'edit',
        ])->name('all-properties.edit');
        Route::put('all-properties/{properties}', [
            PropertiesController::class,
            'update',
        ])->name('all-properties.update');
        Route::delete('all-properties/{properties}', [
            PropertiesController::class,
            'destroy',
        ])->name('all-properties.destroy');

        Route::resource('realtors', RealtorController::class);
        Route::resource('users', UserController::class);
    });
