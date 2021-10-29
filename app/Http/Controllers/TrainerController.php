<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Models\Trainer;
use Illuminate\Support\Facades\DB;

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
            'name'   => ['required','string'],
            'age'    => ['required', 'int']
        ]);

        $name = $request->input('name');
        $age = $request->input('age');
        $region = $request->input('region');
        $trainer = new Trainer;
        $trainer->name = $name;
        $trainer->age = $age;
        $trainer->region = $region;
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
            'age'    => ['required', 'int']
        ]);
       
        $name = $request->input('name');
       $age = $request->input('age');
       $region = $request->input('region');

       $t = Trainer::find($id);
       $t->name = $name;
       $t->age = $age;
       $t->region = $region;
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
            return view('admin.pokelist',[
                'trainer' => $trainer
            ]);
        } else {
            return redirect()->route('trainer.list');
        }
    }
}
