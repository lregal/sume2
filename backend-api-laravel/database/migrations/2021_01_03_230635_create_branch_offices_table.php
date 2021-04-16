<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_offices', function (Blueprint $table) {
            $table->id();
            $table->string('country_code',2);
            $table->string('name');
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('company_id');
            $table->double('coordinates_lat')->nullable();
            $table->double('coordinates_lng')->nullable();

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
        Schema::dropIfExists('branch_offices');
    }
}
