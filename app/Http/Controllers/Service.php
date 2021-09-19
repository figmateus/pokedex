<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Service extends Controller
{
    public function consume() {
        $client = new Client();
        $url = 'https://pokeapi.co/api/v2/pokemon';
        
        $response = $client->request('GET', $url, [
            'verify' => false,
        ]);

         $responseBody = json_decode($response->getBody());   

        return print_r($responseBody);
    }
}
