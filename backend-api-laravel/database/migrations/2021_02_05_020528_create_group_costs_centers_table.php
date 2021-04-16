<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupCostsCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_costs_centers', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('costs_center_id');
            $table->unique(['costs_center_id', 'group_id']);

            $table->foreign('costs_center_id')->references('id')->on('costs_centers');
            $table->foreign('group_id')->references('id')->on('groups');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public
    function down()
    {
        Schema::dropIfExists('group_costs_centers');
    }
}
