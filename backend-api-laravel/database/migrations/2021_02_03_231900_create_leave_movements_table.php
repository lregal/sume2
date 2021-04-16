<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_movements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leave_type_id');
            $table->text('additional_remarks');
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('leave_movement_status_id');
            $table->unsignedBigInteger('leave_movement_dependency_id');

            $table->foreign('leave_type_id')->on('leave_types')->references('id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('leave_movement_status_id')->references('id')
                ->on('leave_movement_statuses');

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
        Schema::dropIfExists('leave_movements');
    }
}
