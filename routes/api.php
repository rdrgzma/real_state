<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\OfficeController;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\RealtorController;
use App\Http\Controllers\Api\PropertiesController;
use App\Http\Controllers\Api\UserOfficesController;
use App\Http\Controllers\Api\UserRealtorsController;
use App\Http\Controllers\Api\UserPartnersController;
use App\Http\Controllers\Api\OfficeRealtorsController;
use App\Http\Controllers\Api\OfficePartnersController;
use App\Http\Controllers\Api\PartnerClientsController;
use App\Http\Controllers\Api\RealtorPartnersController;
use App\Http\Controllers\Api\OfficeAllPropertiesController;
use App\Http\Controllers\Api\RealtorAllPropertiesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('clients', ClientController::class);

        Route::apiResource('offices', OfficeController::class);

        // Office Realtors
        Route::get('/offices/{office}/realtors', [
            OfficeRealtorsController::class,
            'index',
        ])->name('offices.realtors.index');
        Route::post('/offices/{office}/realtors', [
            OfficeRealtorsController::class,
            'store',
        ])->name('offices.realtors.store');

        // Office All Properties
        Route::get('/offices/{office}/all-properties', [
            OfficeAllPropertiesController::class,
            'index',
        ])->name('offices.all-properties.index');
        Route::post('/offices/{office}/all-properties', [
            OfficeAllPropertiesController::class,
            'store',
        ])->name('offices.all-properties.store');

        // Office Partners
        Route::get('/offices/{office}/partners', [
            OfficePartnersController::class,
            'index',
        ])->name('offices.partners.index');
        Route::post('/offices/{office}/partners', [
            OfficePartnersController::class,
            'store',
        ])->name('offices.partners.store');

        Route::apiResource('partners', PartnerController::class);

        // Partner Clients
        Route::get('/partners/{partner}/clients', [
            PartnerClientsController::class,
            'index',
        ])->name('partners.clients.index');
        Route::post('/partners/{partner}/clients', [
            PartnerClientsController::class,
            'store',
        ])->name('partners.clients.store');

        Route::apiResource('all-properties', PropertiesController::class);

        Route::apiResource('realtors', RealtorController::class);

        // Realtor Partners
        Route::get('/realtors/{realtor}/partners', [
            RealtorPartnersController::class,
            'index',
        ])->name('realtors.partners.index');
        Route::post('/realtors/{realtor}/partners', [
            RealtorPartnersController::class,
            'store',
        ])->name('realtors.partners.store');

        // Realtor All Properties
        Route::get('/realtors/{realtor}/all-properties', [
            RealtorAllPropertiesController::class,
            'index',
        ])->name('realtors.all-properties.index');
        Route::post('/realtors/{realtor}/all-properties', [
            RealtorAllPropertiesController::class,
            'store',
        ])->name('realtors.all-properties.store');

        Route::apiResource('users', UserController::class);

        // User Offices
        Route::get('/users/{user}/offices', [
            UserOfficesController::class,
            'index',
        ])->name('users.offices.index');
        Route::post('/users/{user}/offices', [
            UserOfficesController::class,
            'store',
        ])->name('users.offices.store');

        // User Realtors
        Route::get('/users/{user}/realtors', [
            UserRealtorsController::class,
            'index',
        ])->name('users.realtors.index');
        Route::post('/users/{user}/realtors', [
            UserRealtorsController::class,
            'store',
        ])->name('users.realtors.store');

        // User Partners
        Route::get('/users/{user}/partners', [
            UserPartnersController::class,
            'index',
        ])->name('users.partners.index');
        Route::post('/users/{user}/partners', [
            UserPartnersController::class,
            'store',
        ])->name('users.partners.store');

        Route::apiResource('all-properties', PropertiesController::class);
    });
