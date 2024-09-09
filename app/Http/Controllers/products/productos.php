<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class productos extends Controller
{
    //
    public function store(Request $request)
    {
        $producto = Product::create($request->all());

        return response()->json([
            'response' => $producto
        ], 200);
    }

    public function get(Request $request)
    {
        return response()->json(
            ['users' =>  User::all()],
            200
        );
    }
}
