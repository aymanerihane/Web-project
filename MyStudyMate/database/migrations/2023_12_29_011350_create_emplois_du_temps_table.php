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
        Schema::create('emplois_du_temps', function (Blueprint $table) {
            $table->id('id_emploi'); // clé primaire
            $table->unsignedBigInteger('id_local'); // clé étrangère vers le local
            $table->string('jour');
            $table->string('creneau_horaire');
            $table->string('activite');
            $table->unsignedBigInteger('id_module'); // clé étrangère vers le module

            $table->foreign('id_local')->references('id_local')->on('locals');
            $table->foreign('id_module')->references('id_module')->on('modules');

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
