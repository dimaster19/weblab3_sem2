<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Client\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return $clients;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Client::create($request->all());

        return true;
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $client->update($request->all());
        return true;

    }


    public function destroy(Client $client)
    {
       $client->delete();
       return true;

    }
}
