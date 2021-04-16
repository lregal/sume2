<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardPunchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_punches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('punch_type_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('branch_office_id');
            $table->timestamp('movement_timestamp');
            $table->double('coordinates_lat')->nullable();
            $table->double('coordinates_lng')->nullable();
            $table->text('observations');
            $table->boolean('active')->default(true);

            $table->foreign('punch_type_id')->references('id')->on('punch_types');
            $table->foreign('employee_id')->on('employees')->references('id');
            $table->foreign('branch_office_id')->references('id')->on('branch_offices');

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
        Schema::dropIfExists('card_punches');
    }
}
