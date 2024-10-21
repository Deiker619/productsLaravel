<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\clients\clients;
use App\Http\Controllers\products\productos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
});

/* Product */
route::post('/product_store', [productos::class, 'store']);
route::get('/product_get', [productos::class, 'get']);
route::put('/product_update/{id}', [productos::class, 'update']);
route::get('/product_get/{id}', [productos::class, 'getOnlyProduct']);
route::delete('/product_destroy/{id}', [productos::class, 'destroy']);



/* Client */
route::post('/client_store', [clients::class, 'store']);

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::post('register', [AuthController::class, 'register']);
});

Route::group(['middleware' => 'jwt.auth'], function () { // protege las rutas para estar atento de un token valido
    
});
