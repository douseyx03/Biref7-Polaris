<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class eleve extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'classe',
        'sexe',
    ];
    
    public function note(): HasMany
    {
        return $this->hasMany(note::class);
    }

    

}
