<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    protected $fillable = ['name'];


    
    public function pokemons() {
        return $this->belongsToMany(Pokemon::class, 'trainer_pokemon', 'trainer_id', 'pokemon_id');
    }
}
