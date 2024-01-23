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
        Schema::create('_abscence', function (Blueprint $table) {
            $table->id('id_abscence');
            $table->text('justification');
            $table->date('date');
            $table->string('filepath');
            $table->foreignId('CNE')->constrained('etudiants');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_abscence');
    }
};
