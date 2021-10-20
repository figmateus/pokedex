<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Service;
use App\Http\Controllers\TrainerController;
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
    return view('welcome');
});

Route::get('/Api',[Service::class, 'consume']);

Route::prefix('/trainer')->group(function(){

    Route::get('/',[TrainerController::class, 'List'])->name('trainer.list');
    Route::get('add', [TrainerController::class, 'Add'])->name('trainer.add');
    Route::post('add', [TrainerController::class, 'TrainerAddAction']);
    Route::get('edit/{id}',[TrainerController::class, 'Edit'])->name('trainer.edit');
    Route::post('edit/{id}',[TrainerController::class, 'EditAction']);
    Route::get('delete/{id}', [TrainerController::class, 'Delete']);
    Route::get('pokemon/{id}', [TrainerController::class, 'TrainerAddPokemon']);
    Route::post('pokemon/{id}', [TrainerController::class, 'TrainerAddPokemonAction']);
    
});

