<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnimals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            $table->char('gender',1);
            $table->integer('arrivalState');
            $table->date('arrivalDate');
            $table->string('responsiblePerson',50);
            $table->string('responsiblePersonContact',60);
            $table->integer('responsiblePersonType');
            $table->text('generalDescription');
            $table->string('foundAddress',100);
            $table->integer('species_id')->unsigned();
        });
        Schema::table('animals',function($table)
        {
            $table->foreign('species_id')
                ->references('id')
                ->on('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('animals');
    }
}
