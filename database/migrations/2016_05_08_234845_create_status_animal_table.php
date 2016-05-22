<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('status_animal',function(Blueprint $table)
        {


            $table->integer('animal_id')->unsigned();
            $table->string('status');
            $table->date('date');
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
        Schema::drop('status_animal');
    }
}
