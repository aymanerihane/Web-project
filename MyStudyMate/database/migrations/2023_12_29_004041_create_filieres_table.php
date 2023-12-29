<?php

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
        Schema::create('filieres', function (Blueprint $table) {
            $table->id('id_filiere'); // clé primaire
            $table->string('nom');
            $table->unsignedBigInteger('id_responsable'); // clé étrangère vers l'utilisateur
            $table->unsignedBigInteger('id_departement'); // clé étrangère vers le département

            $table->foreign('id_responsable')->references('id')->on('users');
            $table->foreign('id_departement')->references('id_departement')->on('departements');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filieres');
    }
};
