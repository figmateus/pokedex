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
        return view('admin.add');
    }

    public function TrainerAddAction(){

    }

    public function Edit($id){

        $trainer = Trainer::find($id);
        if($trainer) {
            return view('admin.edit',[
                'trainer'  => $trainer
            ]);
        }else {
            return redirect()->route('trainer.list');
        }
        
    }

    public function EditAction(){
       
    }

   

    public function Delete(){

    }

    public function TrainerAddPokemon($id){
        $trainer = Trainer::find($id);
        if($trainer) {
            return view('admin.pokelist',[
                'trainer'  => $trainer
            ]);
        }else {
            return redirect()->route('trainer.list');
        }
    }

    public function TrainerAddPokemonAction(){
        
    }

    public function TrainerDeletePokemon(){
        
    }

}
