<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('idV');
            $table->string('completeName');
            $table->string('address');
            $table->string('phone');
            $table->dateTime('enrollmentDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('volunteers');
    }
}
