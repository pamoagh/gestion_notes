<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateElementsConstitutifsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('elements_constitutifs', function (Blueprint $table) {
        $table->id();
        $table->string('code');
        $table->string('nom');
        $table->integer('coefficient');
        $table->foreignId('ue_id')->constrained('unites_enseignement')->onDelete('cascade');
        $table->timestamps();
    });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('elements_constitutifs');
    }
};
