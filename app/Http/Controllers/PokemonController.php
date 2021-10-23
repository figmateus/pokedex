<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function service() {
        $pokeName = 'pikachu';
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$pokeName}",[
            'verify' => false,
        ]);
        $responseBody = json_decode($response->getBody(), false); 
        

        print_r($responseBody->name);
        print_r($responseBody->types['0']->type->name);
        dd($responseBody->sprites->front_default);
        
        
    
            

            
    }
}
