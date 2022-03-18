<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type')->nullable();
            $table->string('vehicle_make')->nullable();
            $table->string('vehicle_model')->nullable();
            $table->string('make_year')->nullable();
            $table->string('vehicle_color')->nullable();
            $table->string('chasis_number')->nullable();
            $table->string('engine_number')->nullable();
            $table->date('date_of_purchase')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('address')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('town')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->string('lga')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('national_id')->nullable();
            $table->string('category')->nullable();
            $table->string('email')->nullable();
            $table->string('amount')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('vehicle_registrations');
    }
}
