<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\PokemonController;
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
    return view('trainer');
});

Route::get('/Api',[PokemonController::class, 'service']);

Route::prefix('/trainer')->group(function(){

    Route::get('/',[TrainerController::class, 'List'])->name('trainer.list');
    Route::get('add', [TrainerController::class, 'Add'])->name('trainer.add');
    Route::post('add', [TrainerController::class, 'TrainerAddAction']);
    Route::get('edit/{id}',[TrainerController::class, 'Edit'])->name('trainer.edit');
    Route::post('edit/{id}',[TrainerController::class, 'EditAction']);
    Route::get('delete/{id}', [TrainerController::class, 'Delete']);
    Route::get('{id}/pokemon', [TrainerController::class, 'TrainerAddPokemon'])->name('trainer.pokeAdd');
    Route::post('{id}/pokemon', [TrainerController::class, 'TrainerAddPokemonAction']);
    
});

