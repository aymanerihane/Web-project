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

        Schema::create('classes', function (Blueprint $table) {
            $table->id('id_classe');
            $table->string('nom');
            $table->integer('nbrEtudiants');
            $table->foreignId('id_filiere')->references('id_filiere')->on('filieres');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('classe');
    }
};
