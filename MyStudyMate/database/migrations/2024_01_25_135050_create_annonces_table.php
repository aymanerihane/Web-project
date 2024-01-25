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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id('id_annonce');
            $table->text('titre');
            $table->text('resume');
            $table->text('Description');
            $table->foreignId('id_Utilisateur')->references('id')->on('users');
            $table->foreignId('id_filiere')->references('id_filiere')->on('filieres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
