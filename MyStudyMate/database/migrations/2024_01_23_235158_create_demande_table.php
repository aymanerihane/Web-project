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
        Schema::create('demande', function (Blueprint $table) {
            $table->id('id_demande');
            $table->string('objet');
            $table->string('TypeDemande');
            $table->text('DescripDemande');
            $table->text('ReponseDemande')->nullable();
            $table->enum('statutDemande', ['En attente', 'Approuvée', 'Rejetée']);
            $table->foreignId('CNE')->references('CNE')->on('etudiants');
            $table->foreignId('id_departement')->references('id_departement')->on('departements');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande');
    }
};
