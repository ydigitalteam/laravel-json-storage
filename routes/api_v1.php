<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('api')
    ->prefix('api/v1')
    ->group(function () {
        Route::get('/domains', [\JsonStorage\Http\Controllers\Api\V1\DomainController::class, 'index']);
        Route::get('/domains/{id}', [\JsonStorage\Http\Controllers\Api\V1\DomainController::class, 'show']);
    });
