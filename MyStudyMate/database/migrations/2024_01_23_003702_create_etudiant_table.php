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

            $table->foreignID('idUtilisateur')->references('id')->on('users');
            $table->foreignID('idFiliere')->references('id_filiere')->on('filieres');
            $table->foreignID('id_Classe')->references('id_classe')->on('classe');

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
