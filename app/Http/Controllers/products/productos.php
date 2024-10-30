<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class productos extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function store(Request $request)
    {
        $newProduct = $this->productService->createNewProduct($request);
        return $newProduct;
    }

    public function get(Request $request)
    {
        $products = $this->productService->get($request);
        return $products;
    }

    public function getOnlyProduct(Request $request){
        $product = $this->productService->getOnlyProduct($request);
        return $product; 
    }

    public function update(Request $request){
        $product = $this->productService->updateProduct($request);
        return $product;

    }


    public function destroy(Request $request){
        $product = $this->productService->destroyProduct($request);
        return $product;
    }
}
