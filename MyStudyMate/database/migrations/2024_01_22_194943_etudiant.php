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
        Schema::create('etudiant', function (Blueprint $table) {
            $table->id('CNE'); // clé primaire
            $table->Integer('groupTp');
            $table->boolean('is_Delegue');

            $table->unsignedBigInteger('idUtilisateur');// clé étrangère vers Utilisateur
            $table->unsignedBigInteger('idFiliere'); // clé étrangère vers filiere
            $table->unsignedBigInteger('id_Classe');// clé étrangère vers class
            $table->foreign('idUtilisateur')->references('id')->on('users');
            $table->foreign('idFiliere')->references('idFiliere')->on('filieres');
            $table->foreign('id_Classe')->references('id_Classe')->on('Classe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant');
    }
};
