<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocalGovtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create("states", function (Blueprint $table)
        {
          $table->id();
          $table->string('name');
        });

        Schema::create('local_govt', function (Blueprint $table)
        {
            $table->id();
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('local_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('states');
        Schema::drop('local_govt');
    }
}
