<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostsCenterClientCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costs_center_client_companies', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('costs_center_id');
            $table->unsignedBigInteger('client_company_id');
            $table->unique(['costs_center_id', 'client_company_id'],'costs_centers_client_companies_unq');

            $table->foreign('costs_center_id','costs_centers_foreign')->on('costs_centers')->references('id');
            $table->foreign('client_company_id','client_companies_foreing')->on('client_companies')->references('id');

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
        Schema::dropIfExists('costs_center_client_companies');
    }
}
