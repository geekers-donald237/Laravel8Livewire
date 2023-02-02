<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->char('sexe');
            $table->string('dateNaissance');
            $table->string('lieuNaissance');
            $table->string('nationalite');
            $table->string('ville');
            $table->string('pays');
            $table->string('addresse');
            $table->string('telephone1');
            $table->string('telephone2')->nullable();
            $table->string('piecesIdentite');
            $table->string('noPiecesIdentites');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
