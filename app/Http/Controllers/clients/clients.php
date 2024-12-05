<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Services\ClientService;
use Illuminate\Http\Request;

class clients extends Controller
{
    protected $clientService;


    public function __construct(ClientService $clientService)
    {

        $this->clientService = $clientService;
    }

    public function get(Request $request){
        $clients = $this->clientService->get($request);

        return $clients;
    }


    public function store(Request $request)
    {

        $cliente = $this->clientService->newOrOldClient($request);
        return $cliente;
        
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
