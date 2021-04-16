<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('labor_file_number');
            $table->bigInteger('person_id')->unsigned();
            $table->date('admition_date');
            $table->date('termination_date')->nullable();
            $table->boolean('active')->default(true);
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('bank_account_id')->unsigned();

            $table->foreign('person_id')->references('id')->on('people');
            $table->foreign('company_id')->references('id')->on('companies')->restrictOnDelete();
            $table->foreign('bank_account_id')->references('id')->on('banks');

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
        Schema::dropIfExists('employees');
    }
}
