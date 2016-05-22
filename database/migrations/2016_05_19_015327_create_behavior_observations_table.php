<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBehaviorObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behavior_observations',function(Blueprint $table)
        {
            $table->increments('id');
            $table->dateTime('datetime');
            $table->string('temperamentWithAnimals');
            $table->string('attitudeWithAnimals');
            $table->string('temperamentWithPeople');
            $table->string('attitudeWithPeople');
            $table->string('recommendations');
            $table->integer('volunteer_id')->unsigned();
            $table->foreign('volunteer_id')->references('id')->on('volunteers');
            $table->integer('animal_id')->unsigned();
            $table->foreign('animal_id')->references('id')->on('animals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('behavior_observations');
    }
}
