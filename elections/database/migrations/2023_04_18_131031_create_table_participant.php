<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTableParticipant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',20);
            $table->integer('num_cni');
            $table->integer('age');
            $table->char('sexe');
            $table->string('statut');
            $table->unsignedInteger('id_region');
            $table->foreign('id_region')->references('id')->on('regions')->onDelete('cascade');
            $table->unsignedInteger('id_vote');
            $table->foreign('id_vote')->references('id')->on('votes')->onDelete('cascade');
            // $table->foreignIdFor('Region');
            $table->string('login');
            $table->string('password');
            $table->string('email')->nullable();
            $table->string('etat');
            $table->string('telephone')->nullable();
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
        Schema::dropIfExists('participant');
    }
}
