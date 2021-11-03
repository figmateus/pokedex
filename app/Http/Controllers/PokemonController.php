<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Models\Trainer;
use App\Services\BaseRequestService;

class PokemonController extends Controller
{
    
    public function printPoke() {
        $pokeName = 'pikachu';
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$pokeName}",[
            'verify' => false,
        ]);
        $responseBody = json_decode($response->getBody(), false); 
        

        print_r($responseBody->name);
        print_r($responseBody->types['0']->type->name);
        dd($responseBody->sprites->front_default);  
    }

    public function TrainerAddPokemon(Request $request, $id){
       
        $pokeName = $request->input('pokeAdd');
        $trainer = Trainer::find($id);
        
        if($trainer) {
            
            return view('admin.addPoke',[
                'trainer'  => $trainer
            ]);
            
            
            
        }else {
            return redirect()->route('trainer.list');
        }
    }

    public function TrainerAddPokemonAction(Request $request){
        $data = $request->input('pokeAdd');
        print_r("funcionou!");
        print_r($data);
    }

    public function TrainerDeletePokemon(){
        
    }
}
