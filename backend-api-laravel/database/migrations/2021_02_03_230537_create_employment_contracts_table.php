<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_contracts', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->bigInteger('job_position_id')->unsigned();
            $table->foreign('job_position_id')->references('id')->on('job_positions');
            $table->bigInteger('collective_agreement_id')->unsigned();
            $table->foreign('collective_agreement_id')->references('id')->on('collective_agreements');
            $table->bigInteger('work_shift_id')->unsigned();
            $table->foreign('work_shift_id')->references('id')->on('work_shifts');
            $table->bigInteger('job_category_id')->unsigned();
            $table->foreign('job_category_id')->references('id')->on('job_categories');
            $table->unsignedBigInteger('company_client_id');
            $table->foreign('company_client_id')->references('id')->on('client_companies');
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->decimal('salary',13,2,true)->nullable();
            $table->decimal('additionals',13,2,true)->nullable();
            $table->decimal('gross_salary',13,2,true)->nullable();

            $table->text('reason_for_termination')
                ->comment("se guarda la fecha de fin y el motivo, ultima pantalla");

            $table->primary(['job_position_id','job_category_id', 'collective_agreement_id', 'start_date'],'employment_contract_pk');

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
        Schema::dropIfExists('employement_contracts');
    }
}
