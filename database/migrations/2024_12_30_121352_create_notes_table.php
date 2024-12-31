<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etudiant_id');
            $table->unsignedBigInteger('ec_id');
            $table->unsignedBigInteger('ue_id'); // Sans clause AFTER
            $table->string('note');
            $table->string('session');
            $table->string('date_evaluation');
            $table->timestamps();

            // Foreign keys
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('ec_id')->references('id')->on('elements_constitutifs')->onDelete('cascade');
            $table->foreign('ue_id')->references('id')->on('unites_enseignement')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
