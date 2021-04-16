<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyClientCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_client_companies', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('company_client_id');

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('company_client_id')->references('id')->on('companies');

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
        Schema::dropIfExists('company_client_companies');
    }
}
