<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardPunchImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_punch_images', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('card_punch_id');
            $table->string('mime_type');
            $table->binary('content');

            $table->foreign('card_punch_id')->references('id')->on('card_punches');

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
        Schema::dropIfExists('card_punch_images');
    }
}
