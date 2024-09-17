<?php

use App\Http\Controllers\products\productos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
});

route::post('/product_store', [productos::class, 'store']);
route::get('/product_get', [productos::class, 'get']);
route::put('/product_update/{id}', [productos::class, 'update']);
route::get('/product_get/{id}', [productos::class, 'getOnlyProduct']);
route::delete('/product_destroy/{id}', [productos::class, 'destroy']);
