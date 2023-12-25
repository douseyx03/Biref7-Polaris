<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class note extends Model
{
    use HasFactory;

    protected $fillable = [
        'matiere',
        'note',
        
    ];

    public function eleve(): BelongsTo
    {
        return $this->belongsTo(eleve::class);
    }
}
