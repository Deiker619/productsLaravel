<?php

namespace App\Services;

use App\Models\Cart_shopping;
use App\Models\CartItems;
use App\Models\Client;
use App\Models\Sale;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class CartService{


    public function createNewCart($id){
        $cart = Cart_shopping::create([
            'client_id' => $id
        ]);
        return $cart;
    }

    public function addProductsOfCart(Request $request){
        

    }
}