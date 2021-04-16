<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveMovementStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_movement_statuses', function (Blueprint $table) {
            $table->id();
            $table->enum('status',config('enums.status'));
            $table->text('reason');
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('updater_id');

            $table->foreign('updater_id')->references('id')->on('users');

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
        Schema::dropIfExists('leave_movement_statuses');
    }
}
