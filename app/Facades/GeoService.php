<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class GeoService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'geoService';
    }
}
