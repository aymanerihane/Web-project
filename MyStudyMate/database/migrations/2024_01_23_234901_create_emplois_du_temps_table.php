<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emplois_du_temps', function (Blueprint $table) {
            $table->id('id_emploi'); // clé primaire

            $table->string('jour');
            $table->string('creneau_horaire');
            $table->string('activite');

            //  les clés étrangères
            $table->foreignId('id_module')->references('id_module')->on('modules'); // Utilisation de constrained
            $table->foreignId('id_local')->references('id_local')->on('locals');   // Utilisation de constrained
            $table->foreignId('id_filiere')->references('id_filiere')->on('filieres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplois_du_temps');
    }
};