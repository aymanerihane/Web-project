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
        Schema::create('etudiants', function (Blueprint $table) {

            $table->id('CNE'); // clé primaire
            $table->string('groupTp');
            $table->boolean('is_Delegue')->default(false);

            $table->foreignID('id_Utilisateur')->references('id')->on('users');
            $table->foreignID('id_Filiere')->references('id_filiere')->on('filieres');
            $table->foreignID('id_Classe')->references('id_classe')->on('classes');

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
