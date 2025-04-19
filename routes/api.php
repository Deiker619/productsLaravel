<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\clients\clients;
use App\Http\Controllers\products\productos;
use App\Http\Controllers\sales\sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/services', [sales::class, 'show']);

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


/* FACTURA */
route::post('/pdf', function (Request $request){


    $datos = [
    'client' => $request->input('client'),
     'cart' =>$request->input('cart')
    ];
    
    $pdf = Pdf::loadView('pdf.invoice', $datos);
    $pdf->setPaper('letter', 'portrait'); 
    $pdf->setPaper([0, 0, 226, 841]); //Formato para factura
     return $pdf->stream('archivo.pdf', ["Attachment" => true]); 
 });

 route::post('/payment', [sales::class, 'store']);