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


        if (Client::where('cedula', $request->cedula)->exists()) { //El Cliente ya esta registrado
            $client = Client::where('cedula', $request->cedula)->get();
            return response()->json([
                'message' => 'Bienvenido de nuevo',
                'client' => $client
            ]);
        } else {
            $client = Client::create($request->all());
            return response()->json([
                'message' => 'Registro exitoso',
                'client' => $client
            ]);
        } 
    }

    public function destroy(Request $request)
    {
        $client = Client::findOrFail($request->id);
        $client->delete();
    }

    public function update(Request $request)
    {
        $client = Client::findOrFail($request->id);
        $client->fill($request->all());
        $client->save();
        return response()->json($client, 200);
    }

    public function edit() {}
}
