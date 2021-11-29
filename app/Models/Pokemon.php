<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemon';

    protected $fillable = [
        'name', 
        'type', 
        'image_url'
    ];

    protected $hidden = [
        'image_url'
    ];

    public function trainers()
    {
        return $this->belongsToMany(Trainer::class, 'trainer_pokemon', 'pokemon_id', 'trainer_id');
    }

   

}
