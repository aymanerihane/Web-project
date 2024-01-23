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
            $table->string('contenuFiliere');
            $table->foreignId('MatriculeProf')
            ->references('MatriculeProf')
            ->on('Professeur')
            ->where('is_RespoFiliere', true) // Condition pour être responsable de filière
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('id_departement')->references('id_departement')->on('departements');
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
