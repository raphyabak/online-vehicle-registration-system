<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->foreign('vehicle_id')->references('id')->on('vehicle_registrations')->onDelete('cascade');
            $table->string('license_number')->nullable();
            $table->dateTime('issue_date')->nullable();
            $table->dateTime('expiry_date')->nullable();
            $table->unsignedBigInteger('inspector_id')->nullable();
            $table->foreign('inspector_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('renew_notify')->default(0);
            $table->timestamps();
        });

        Schema::table('vehicle_registrations', function (Blueprint $table) {
            $table->unsignedBigInteger('license_id')->nullable();
            $table->foreign('license_id')->references('id')->on('licenses')->onDelete('cascade');
            $table->unsignedBigInteger('inspector_id')->nullable();
            $table->foreign('inspector_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('licenses');
    }
}
