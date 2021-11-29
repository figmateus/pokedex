<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function TrainerAddAction(Request $request){
        $request->validate([
            'name'   => ['required','alpha','string'],
            'age'    => ['required', 'int'],
            'region' => ['required', 'string']
        ]);

        $trainer = new Trainer([
            "name"   => $request->input('name'),
            "age"    => $request->input('age'),
            "region" => $request->input('region')
        ]);
        $trainer->save();
        return redirect()->route('trainer.list');
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

    public function EditAction(Request $request, $id){
        $request->validate([
            'name'   => ['required','string'],
            'age'    => ['required', 'int'],
            'region' => ['required', 'string']
        ]);

        $t = Trainer::find($id);
        $t->name = $request->input('name');
        $t->age = $request->input('age');
        $t->region = $request->input('region');
        $t->save();

       return redirect()->route('trainer.list');

    }

    public function Delete($id){
        $trainer = Trainer::find($id);
        $trainer->delete();
        return redirect()->route('trainer.list');
    }

    public function TrainerListPokemon($id){
        
        $trainer = Trainer::find($id);
        
        if($trainer) {
            $pokemon = $trainer->pokemons()->get();
            
            
            return view('admin.pokelist',[
                'trainer' => $trainer,
                'pokemon' => $pokemon
            ]);
        } else {
            return redirect()->route('trainer.list');
        }
    }
}
