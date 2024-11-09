<?php

use App\Models\Typepret;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('demandeprets', function (Blueprint $table) {
            $table->id();
            $table->integer('montant');
            $table->integer('remboursementmensuel');
            $table->string('objectif');
            $table->string('statut_professionnel');
            $table->string('nom_employeur');
            $table->integer('revenu_mensuel');
            $table->string('nom_banque');
            $table->enum('statut', ['en attente', 'approuvé', 'rejeté'])->default('en attente');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Typepret::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandeprets');
    }
};
