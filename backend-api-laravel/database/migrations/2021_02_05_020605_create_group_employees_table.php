<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_employees', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('group_id');
            $table->unique(['employee_id', 'group_id']);

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('group_id')->references('id')->on('groups');

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
        Schema::dropIfExists('group_employees');
    }
}
