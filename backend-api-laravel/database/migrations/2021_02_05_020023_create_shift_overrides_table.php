<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftOverridesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shift_overrides', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('branch_office_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('shift_schedule_id');

            $table->foreign('branch_office_id')->on('branch_offices')->references('id');
            $table->foreign('employee_id')->on('employees')->references('id');
            $table->foreign('shift_schedule_id')->on('shift_schedules')->references('id');

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
        Schema::dropIfExists('shift_overrides');
    }
}
