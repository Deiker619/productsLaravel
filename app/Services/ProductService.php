<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductService{

    public function createNewProduct(Request $request){
        try {
            $producto = Product::create($request->all());
            if ($producto) {
                return response()->json([
                    'producto' => $producto
                ], 201);
            } 
        } catch (\Exception $e) {
            // Para forzar la respuesta en JSON, independientemente del error
            return response()->json([
                'message' => 'Error en el servidor al crear el producto',
            ], 500);
        }
    }

    public function get(Request $request){
        return response()->json(
            ['products' =>  product::all()],
            200
        );
    }

    public function getOnlyProduct(Request $request){
        $product = Product::findOrFail($request->id);
        return response()->json($product,200);
    }

    public function updateProduct(Request $request){
        $product = Product::findOrFail($request->id);
        $product->fill($request->all());
        $product->save();
        return response()->json($product, 200);
    }

    public function destroyProduct(Request $request){
        $product = Product::findOrFail($request->id);
         $product->delete();
    }
}