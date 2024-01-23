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

        Schema::create('classe', function (Blueprint $table) {
            $table->id('id_classe');
            $table->integer('nbrEtudiants');
            $table->foreignId('id_Module')->references('id_module')->on('modules');
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
