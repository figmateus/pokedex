<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Trainer;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\PokemonController;
use App\Services\PokeApiRequestService;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('trainer.list'));
});

Route::get('/test', function() {
    dd(\App\Models\Pokemon::find(5)->toArray());
});

Route::get('/Api', function () {

    $pokeApi = new PokeApiRequestService();
    $poke = $pokeApi->getPokemon('pikachu');
    dd($poke);
});

Route::prefix('/trainer')->group(function () {
    Route::get('/', [TrainerController::class, 'List'])->name('trainer.list');
    Route::get('add', [TrainerController::class, 'Add'])->name('trainer.add');
    Route::post('add', [TrainerController::class, 'TrainerAddAction'])->name('trainer.addAction');
    Route::get('edit/{id}', [TrainerController::class, 'Edit'])->name('trainer.edit');
    Route::post('edit/{id}', [TrainerController::class, 'EditAction']);
    Route::get('delete/{id}', [TrainerController::class, 'Delete'])->name('trainer.delete');
    Route::get('pokemon/{id}', [TrainerController::class, 'TrainerListPokemon'])->name('trainer.TrainerListPoke');
    Route::get('pokemon/add/{id}', [PokemonController::class, 'TrainerAddPokemon'])->name('poke.Add');
    Route::post('pokemon/add/{id}', [PokemonController::class, 'TrainerAddPokemonAction'])->name('poke.AddAction');
    Route::get('{id}/pokemon/delete/{pokeId}', [PokemonController::class, 'TrainerDeletePokemon'])->name('poke.delete');
    Route::post('{id}/pokemon/delete/{pokeId}', [PokemonController::class, 'TrainerDeletePokemon'])->name('poke.delete');
});
