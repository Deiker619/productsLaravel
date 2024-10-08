<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class clients extends Controller
{
    //

    public function store(Request $request)
    {
        $client = Client::create($request->all());
        return response()->json($client);
    }

    public function destroy() {}

    public function update() {}

    public function edit() {}
}
