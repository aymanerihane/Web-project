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
            $table->string('CNE')->primary(); // clé primaire
            $table->unsignedInteger('groupTp');
            $table->boolean('is_Delegue')->default(false);
            $table->foreignId('id')->constrained('users'); // Utilisation de constrained pour simplifier
            $table->foreignId('idFiliere')->constrained('filieres', 'idFiliere'); // Ajout du nom de la colonne de référence
            $table->foreignId('id_Classe')->constrained('classe', 'id_Classe')->nullable(); // Ajout du nom de la colonne de référence
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
