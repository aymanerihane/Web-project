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
            $table->string('MatriculeProf')->primary(); // clé primaire
            $table->boolean('is_RespoDepart')->default(false);
            $table->boolean('is_RespoFiliere')->default(false);
            // clé étrangère vers l'utilisateur
            $table->foreignId('id')->constrained('users');
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
