<?php

use App\Models\Demandepret;
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
        Schema::create('historiques', function (Blueprint $table) {
            $table->id();
            $table->enum('ancien_statut', ['en attente', 'approuvé', 'rejeté']);
            $table->enum('nouveau_statut', ['en attente', 'approuvé', 'rejeté']);
            $table->date('date_changement_statut');
            $table->foreignIdFor(Demandepret::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiques');
    }
};
