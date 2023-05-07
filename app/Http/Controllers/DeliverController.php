<?php

namespace App\Http\Controllers;

use App\Models\Deliver;
use App\Http\Requests\StoreDeliverRequest;
use App\Http\Requests\UpdateDeliverRequest;
use Illuminate\Http\Client\Request;

class DeliverController extends Controller
{
    public function index()
    {
        $delivers = Deliver::all();
        return $delivers;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Deliver::create($request->all());

        return true;
    }

    public function update(Request $request, Deliver $deliver)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $deliver->update($request->all());
        return true;

    }


    public function destroy(Deliver $deliver)
    {
       $deliver->delete();
       return true;

    }
}
