<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

define('EARTH_RADIUS', 6372795);

class GeoService
{
    public function getGeo($address)
    {

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "https://api.apilayer.com/currency_data/convert?to=to&from=from&amount=amount",
        //     CURLOPT_HTTPHEADER => array(
        //         "Content-Type: text/plain",
        //         "apikey: jrBUHsEkn1BgIgcNP2T8ALpPOgiVvqy0"
        //     ),
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "GET"
        // ));
        //5111cc9ed4b8cdaa8f3bf9005cdf064e

        $response = Http::acceptJson()->get('api.positionstack.com/v1/forward', [
            'access_key' => '5111cc9ed4b8cdaa8f3bf9005cdf064e',
            'query' => $address,

        ]);
        $result =  json_decode($response->body());
        $result = $result->data[0];
        $result = [
            'latitude' => $result->latitude,
            'longitude' => $result->longitude,
            'address' => $result->name
        ];
        return (object)$result;
    }


    /*
* Расстояние между двумя точками
* $φA, $λA - широта, долгота 1-й точки,
* $φB, $λB - широта, долгота 2-й точки
*
*/
    public function calculateDistanceMath($φA, $λA, $φB, $λB)
    {

        // перевести координаты в радианы
        $lat1 = $φA * M_PI / 180;
        $lat2 = $φB * M_PI / 180;
        $long1 = $λA * M_PI / 180;
        $long2 = $λB * M_PI / 180;

        // косинусы и синусы широт и разницы долгот
        $cl1 = cos($lat1);
        $cl2 = cos($lat2);
        $sl1 = sin($lat1);
        $sl2 = sin($lat2);
        $delta = $long2 - $long1;
        $cdelta = cos($delta);
        $sdelta = sin($delta);

        // вычисления длины большого круга
        $y = sqrt(pow($cl2 * $sdelta, 2) + pow($cl1 * $sl2 - $sl1 * $cl2 * $cdelta, 2));
        $x = $sl1 * $sl2 + $cl1 * $cl2 * $cdelta;

        //
        $ad = atan2($y, $x);
        $dist = $ad * EARTH_RADIUS;
        // Ответ в км
        return $dist/1000;
    }
}
