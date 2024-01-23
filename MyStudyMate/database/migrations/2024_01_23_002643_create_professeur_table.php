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
        Schema::create('Professeur', function (Blueprint $table) {
            $table->id('MatriculeProf'); // clé primaire
            $table->boolean('is_RespoDepart');
            $table->boolean('is_RespoFiliere');
            $table->foreignId('id_Utilisateur')->references('id')->on('users');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Professeur');
    }
};
