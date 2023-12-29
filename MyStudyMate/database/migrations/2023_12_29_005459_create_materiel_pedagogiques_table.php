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
        Schema::create('materiel_pedagogiques', function (Blueprint $table) {
            $table->id('id_materiel'); // clé primaire
            $table->string('nom');
            $table->enum('etat', ['Opérationnel', 'En panne']);
            $table->unsignedBigInteger('id_local'); // clé étrangère vers le local

            $table->foreign('id_local')->references('id_local')->on('locals');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiel_pedagogiques');
    }
};
