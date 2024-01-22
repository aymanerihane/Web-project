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
        Schema::create('modules', function (Blueprint $table) {
            $table->id('id_classe');
            $table->integer('nbrEtudiants');
            $table->integer('id_Module');
            $table->integer('id_filiere');
            $table->foreignId('id_Module')->references('id_Module')->on('modules');
            $table->foreignId('id_filiere')->references('id_filiere')->on('filieres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
