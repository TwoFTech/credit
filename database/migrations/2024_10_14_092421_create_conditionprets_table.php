<?php

use App\Models\Typepret;
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
        Schema::create('conditionprets', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->foreignIdFor(Typepret::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conditionprets');
    }
};
