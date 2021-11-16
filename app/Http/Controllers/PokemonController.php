<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Models\Trainer;
use App\Services\PokeApiRequestService;

class PokemonController extends Controller
{
    
    public function TrainerAddPokemon($id){
       
        $trainer = Trainer::find($id);
        
        if($trainer) {
            
            return view('admin.addPoke',[
                'trainer'  => $trainer
            ]);
        }else {
            return redirect()->route('trainer.list');
        }
    }

    public function TrainerAddPokemonAction(Request $request, $id)
    {
     
        $route = $request->headers->get('referer');
        $trainer = Trainer::find($id);
        $input = $request->input('pokeAdd');
        $pokeApi = new PokeApiRequestService();
        $poke = $pokeApi->getPokemon($input);
        if($poke){
            $pokemon = Pokemon::firstOrCreate([
                'name' => "{$poke->name}",
                'type' => "{$poke->types['0']->type->name}",
                'image_url' => "{$poke->sprites->front_default}"
            ]);
            $trainer->pokemons()->attach($pokemon);
            $trainer->push();
            return redirect($route);
        }    
    }

    public function TrainerDeletePokemon(){
        
    }
}
