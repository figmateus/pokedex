<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class BaseRequestService {

    
    protected function get($poke) 
    {
       $response = $this->getUri($poke);
        return json_decode($response->getBody());
    }

    private function getUri($poke) 
    {
        return Http::get(sprintf('%s%s', env('URI_BASE_POKEAPI'), $poke));
    }
}