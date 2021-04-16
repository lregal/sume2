<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostsCenterBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costs_center_branches', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('costs_center_id');
            $table->unsignedBigInteger('branch_office_id');
            $table->unique(['costs_center_id', 'branch_office_id']);

            $table->foreign('costs_center_id')->on('costs_centers')->references('id');
            $table->foreign('branch_office_id')->on('branch_offices')->references('id');

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
        Schema::dropIfExists('costs_center_branches');
    }
}
