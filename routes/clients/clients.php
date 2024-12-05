<?php 

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\clients\clients;
use App\Models\Client;


/* Client */
route::post('/client_store', [clients::class, 'store']);
route::get('/clients_get', [clients::class, 'get']);