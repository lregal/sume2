<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardPunchUpdateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_punch_update_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_punch_id');
            $table->text('reason');
            $table->unsignedBigInteger('updater_id');
            $table->json('modified_data');
            $table->boolean('active')->default(true);

            $table->foreign('card_punch_id')->on('card_punches')->references('id');
            $table->foreign('updater_id')->references('id')->on('users');

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
        Schema::dropIfExists('card_punch_update_logs');
    }
}
