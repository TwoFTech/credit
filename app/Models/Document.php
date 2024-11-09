<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'chemin',
        'demandepret_id',
    ];

    public function demandePret()
    {
        return $this->belongsTo(Demandepret::class);
    }
}
