<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use App\Http\Requests\StoreStorageRequest;
use App\Http\Requests\UpdateStorageRequest;
use Illuminate\Http\Client\Request;

class StorageController extends Controller
{
    public function index()
    {
        $storages = Storage::all();
        return $storages;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'count' => 'required',
            'desc' => 'required',
            'category_id'=> 'required',
            'delivery_id' => 'required',
        ]);

        Storage::create($request->all());

        return true;
    }

    public function update(Request $request, Storage $storage)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'count' => 'required',
            'desc' => 'required',
            'category_id'=> 'required',
            'delivery_id' => 'required',

        ]);

        $storage->update($request->all());
        return true;

    }


    public function destroy(Storage $storage)
    {
       $storage->delete();
       return true;

    }
}
