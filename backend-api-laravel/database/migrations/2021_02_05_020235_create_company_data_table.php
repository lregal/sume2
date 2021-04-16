<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_data', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->string('data_value');
            $table->unsignedBigInteger('company_data_type_id');
            $table->unsignedBigInteger('company_id');

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('company_data_type_id')->references('id')->on('company_data_types');

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
        Schema::dropIfExists('company_data');
    }
}
