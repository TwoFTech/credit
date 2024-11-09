<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;

    protected $fillable = [
        'ancien_statut',
        'nouveau_statut',
        'date_changement_statut',
        'demandepret_id',
    ];

    public function demandePret()
    {
        return $this->belongsTo(Demandepret::class);
    }
}
