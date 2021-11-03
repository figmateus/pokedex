<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class BaseRequestService {

    
    protected function get($poke) 
    {
        return $this->getUri($poke)->json();
    }

    private function getUri($poke) 
    {
        return Http::get(sprintf('%s%s', env('URI_BASE_POKEAPI'), $poke));
    }
}