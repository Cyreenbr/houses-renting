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

        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('categorie')->nullable();
            $table->string('adresse')->nullable();
            $table->string('surface')->nullable();
            $table->string('prix')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('houses');
    }
};
