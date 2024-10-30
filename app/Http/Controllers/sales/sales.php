<?php

namespace App\Http\Controllers\sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Services\CartService;
use App\Services\SaleService;
use App\Services\UserService;

class sales extends Controller
{
    //

    protected $saleService;
    protected $cartService;

    public function __construct(SaleService $saleService, CartService $cartService)
    {

        $this->saleService = $saleService;
        $this->cartService = $cartService;
    }

    public function show(Request $request)
    {
        $this->saleService->prueba($request);
    }


    public function store(Request $request)
    {
        $datos = [
            'client' => $request->input('client'),
            'cart' => $request->input('cart')
        ];

        

    }
    public function destroy() {}

    public function update() {}

    public function edit() {}
}
