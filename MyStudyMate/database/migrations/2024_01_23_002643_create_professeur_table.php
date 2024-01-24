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
        Schema::create('Professeurs', function (Blueprint $table) {

            $table->id('MatriculeProf'); // clé primaire
            $table->boolean('is_RespoDepart')->default(false);
            $table->boolean('is_RespoFiliere')->default(false);

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
