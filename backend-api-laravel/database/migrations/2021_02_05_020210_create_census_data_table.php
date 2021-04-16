<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCensusDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('census_data', function (Blueprint $table) {
            $table->id();
            $table->string('data_value');
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('census_data_type_id');
            $table->unsignedBigInteger('person_id');

            $table->foreign('census_data_type_id')->references('id')->on('census_data_types');
            $table->foreign('person_id')->references('id')->on('people');

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
        Schema::dropIfExists('census_data');
    }
}
