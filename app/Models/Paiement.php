<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant_paye',
        'date_paiement',
        'demandepret_id',
    ];

    public function demandePret()
    {
        return $this->belongsTo(Demandepret::class);
    }
}
