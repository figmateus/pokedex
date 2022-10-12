<?php

namespace App\Http\Controllers;

use App\Repositories\TrainerRepository;
use Illuminate\Http\Request;
use App\Models\Trainer;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddTrainerValidation;

class TrainerController extends Controller
{

    public function __construct(TrainerRepository $repository)
    {
        $this->repository = $repository;
    }


    public function List(){

        $list = Trainer::all();
        return view('admin.list',[
            'list' => $list
        ]);
    }

    public function Add(){


        return view('admin.add');
    }

    public function TrainerAddAction(AddTrainerValidation $request){

        $trainer = $request->validated();

        $this->repository->create($trainer);

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

            $pokemon = DB::table('trainer_pokemon')
            ->join('pokemon','pokemon.id','trainer_pokemon.pokemon_id')
            ->select('pokemon.*')
            ->where('trainer_pokemon.trainer_id', '=', $id)
            ->get();


            return view('admin.pokelist',[
                'trainer' => $trainer,
                'pokemon' => $pokemon
            ]);

    }
}
