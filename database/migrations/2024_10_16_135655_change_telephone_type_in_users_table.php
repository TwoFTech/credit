<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTelephoneTypeInUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('telephone', 20)->change(); // Choisis une longueur adaptée
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('telephone')->change(); // Revenir à l'ancienne version si nécessaire
        });
    }
}
