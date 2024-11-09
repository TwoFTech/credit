<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conditionpret extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'typepret_id',
    ];

    public function typePret()
    {
        return $this->belongsTo(Typepret::class);
    }
}
