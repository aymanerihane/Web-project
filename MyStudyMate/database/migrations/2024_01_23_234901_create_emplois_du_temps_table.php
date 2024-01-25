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
            $table->id('id_emploi'); // Primary key

            $table->enum('jour', ['LUNDI', 'MARDI', 'MERCREDI', 'JEUDI', 'VENDREDI','SAMEDI']); // Enum for days
            $table->enum('creneau_horaire', ['09h00 - 10h45', '11h00 - 12h45', '13h00 - 14h45','15h00 - 16h45','17h00 - 18h45']); // Enum for time slots
            $table->string('activite');

            // Foreign keys
            $table->foreignId('id_module')->references('id_module')->on('modules');
            $table->foreignId('id_local')->references('id_local')->on('locals');
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
