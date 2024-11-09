<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandepret extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant',
        'remboursementmensuel',
        'objectif',
        'statut_professionnel',
        'nom_employeur',
        'revenu_mensuel',
        'nom_banque',
        'statut',
        'user_id',
        'typepret_id',
    ];
    public function typepret()
    {
        return $this->belongsTo(Typepret::class, 'typepret_id'); // Assure-toi que 'typepret_id' est le bon nom de colonne
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function historiques()
    {
        return $this->hasMany(Historique::class);
    }
    public function user()
{
    return $this->belongsTo(User::class);
}

}
