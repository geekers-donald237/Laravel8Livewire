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
        Schema::create('tarification', function (Blueprint $table) {
            $table->id();
            $table->foreignId('duree_location_id')->constrained('duree_locations');
            $table->foreignId('article_id')->constrained();
            $table->double('prix');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tarification', function (Blueprint $table) {
            $table->dropForeign('duree_location_id','article_id');
        });
        Schema::dropIfExists('tarification');
    }
};
