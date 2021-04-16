<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shift_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('work_shift_id');
            $table->dateTime('date_from');
            $table->dateTime('date_to');
            $table->json('days_of_week');
            $table->time('in_time');
            $table->time('out_time');
            $table->time('working_time');
            $table->binary('icon');
            $table->boolean('active')->default(true);

            $table->foreign('work_shift_id')->references('id')->on('work_shifts');

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
        Schema::dropIfExists('shift_schedules');
    }
}
