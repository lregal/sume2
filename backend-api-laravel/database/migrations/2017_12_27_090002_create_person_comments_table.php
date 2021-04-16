<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('people');
            $table->bigInteger('person_comment_type_id')->unsigned();
            $table->foreign('person_comment_type_id')->references('id')->on('person_comment_types');
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('person_comments');
    }
}
