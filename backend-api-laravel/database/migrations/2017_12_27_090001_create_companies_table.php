<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 1000);
            $table->bigInteger('company_type_id')->unsigned()->default(1);
            $table->string('country_code',2)->nullable();;
            $table->string('business_name', 150)->unique();;
            $table->string('single_tax_identification_number')->nullable();
            $table->string('email', 255)->nullable();
            $table->string('web_page', 255)->nullable();
            $table->double('coordinates_lat')->nullable();
            $table->double('coordinates_lng')->nullable();
            $table->boolean('active')->default(true);

            $table->foreign('company_type_id')->references('id')->on('company_types');
            $table->foreign('country_code')->on('countries')->references('code');
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
        Schema::dropIfExists('companies');
    }
}
