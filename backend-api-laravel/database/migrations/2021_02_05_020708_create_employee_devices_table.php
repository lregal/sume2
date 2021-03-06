<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_devices', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('employee_id');

            $table->foreign('device_id')->references('id')->on('devices');
            $table->foreign('employee_id')->references('id')->on('employees');

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
        Schema::dropIfExists('employee_devices');
    }
}
