<?php


use Illuminate\Support\Facades\Route;


require __DIR__.'/users/users.php';

require __DIR__.'/products/products.php';

require __DIR__.'/clients/clients.php';

require __DIR__.'/auth/auth.php';

Route::group(['middleware' => 'jwt.auth'], function () { // protege las rutas para estar atento de un token valido
    
});