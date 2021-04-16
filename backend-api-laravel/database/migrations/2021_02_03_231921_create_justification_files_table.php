<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJustificationFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('justification_files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('leave_movement_id');
            $table->string('mime_type');
            $table->binary('content');
            $table->boolean('active')->default(true);

            $table->foreign('leave_movement_id')->references('id')->on('leave_movements');

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
        Schema::dropIfExists('justification_files');
    }
}
