<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Models\Trainer;

class TrainerController extends Controller
{
    
    public function List(){

        $list = Trainer::all();

        return view('admin.list',[
            'list' => $list
        ]);
    }
    
    public function Add(){

    }

    public function TrainerAddAction(){

    }

    public function Delete(){

    }

    public function TrainerAddPokemon(){
        
    }

    public function TrainerAddPokemonAction(){
        
    }

    public function TrainerDeletePokemon(){
        
    }

}
