<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typepret extends Model
{
    use HasFactory;

    protected $fillable = [
        'nompret',
        'description',
    ];

    public function demandesPrets()
    {
        return $this->hasMany(Demandepret::class);
    }

    public function conditionsPrets()
    {
        return $this->hasMany(Conditionpret::class);
    }
}
