<?php 

namespace App\Services;

class PokeApiRequestService extends BaseRequestService {

    public function getPokemon($pokemon) 
    {
        return $this->get(sprintf('%s%s', 'pokemon/', $pokemon));
    }

}