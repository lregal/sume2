<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyCollectiveAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_collective_agreements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collective_agreement_id');
            $table->unsignedBigInteger('company_id');
            $table->boolean('active')->default(true);

            $table->foreign('collective_agreement_id')
                ->references('id')->on('collective_agreements');
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
        Schema::dropIfExists('company_collective_agreements');
    }
}
