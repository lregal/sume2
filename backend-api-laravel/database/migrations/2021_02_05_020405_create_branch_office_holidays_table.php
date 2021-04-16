<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchOfficeHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_office_holidays', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('holiday_id');
            $table->unsignedBigInteger('branch_office_id');

            $table->foreign('holiday_id')->references('id')->on('holidays');
            $table->foreign('branch_office_id')->references('id')->on('branch_offices');

            $table->timestamps();
        });
    }

    /**
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch_office_holidays');
    }
}
