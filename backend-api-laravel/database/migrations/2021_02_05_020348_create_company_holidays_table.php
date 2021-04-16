<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_holidays', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('holiday_id');
            $table->unsignedBigInteger('company_id');

            $table->foreign('holiday_id')->references('id')->on('holidays');
            $table->foreign('company_id')->references('id')->on('companies');

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
        Schema::dropIfExists('company_holidays');
    }
}
