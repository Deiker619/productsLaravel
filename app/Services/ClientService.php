<?php

namespace App\Services;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Services\CartService;
class ClientService{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    
    public function newOrOldClient(Request $request){
        if (Client::where('cedula', $request->cedula)->exists()) { //El Cliente ya esta registrado
            $client = Client::where('cedula', $request->cedula)->first(); //Agrega los datos del cliente encontrado a la variable
            $cart = $this->cartService->createNewCart($client->id); //Crea el carrito de compra
            return response()->json([
                'message' => 'Bienvenido de nuevo',
                'client' => $client,
                'cart' => $cart
                
            ]);
        } else {
            $client = Client::create($request->all());
            $cart = $this->cartService->createNewCart($client->id); //Crea el carrito de compra
            return response()->json([
                'message' => 'Registro exitoso',
                'client' => $client,
                'cart' => $cart
            ]);
        } 

        
    }
}