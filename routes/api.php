<?php

use App\Http\Controllers\Api\DogsController;
use App\Http\Controllers\UserController;
use App\Repositories\interface\UserRepositoryInterface;
use Illuminate\Support\Facades\Route;

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

/* Qualquer Um */

Route::get('/dogs', [DogsController::class, 'index']);

Route::get('/dogs/{id}', [DogsController::class, 'show']);

Route::get('/dogs/search/{name}', [DogsController::class, 'search']);

Route::post('/register', [UserController::class, 'register']);

Route::post('/login', [UserController::class, 'login']);


/* Somente Usuários Autenticados */

Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/dogs', [DogsController::class, 'store']);

    Route::put('/dogs/{id}', [DogsController::class, 'update']);

    Route::delete('/dogs/{id}', [DogsController::class, 'destroy']);

    Route::post('/logout', [UserController::class, 'logout']);
    
});