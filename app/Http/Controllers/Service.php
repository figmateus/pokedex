<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Pokemon;
class Service extends Controller
{
    public function consume() {
        $client = new Client();
        $url = 'https://pokeapi.co/api/v2/pokemon/?limit=151';
        
        $response = $client->request('GET', $url, [
            'verify' => false,
        ]);
        $responseBody = json_decode($response->getBody()); 
        
       
    
            $pokemon = new Pokemon;
            foreach($responseBody->results as $poke){
                $urlPoke = $poke->url;
                $nomePoke = $poke->name;
                
                
                
               
               
            }
        
         
        
         

         $list = Pokemon::all();

         return view('admin.list',[
             'list' => $list
         ]);
    }
}
