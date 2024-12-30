<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('u_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('code');  // Assure-toi que cette ligne existe
            $table->string('nom');
            $table->integer('credits_ects');
            $table->string('semestre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('u_e_s');
    }
};
