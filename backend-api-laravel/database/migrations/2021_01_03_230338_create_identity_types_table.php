<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentityTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identity_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->boolean('active')->default(true);
            $table->bigInteger('country_id')->unsigned();

            $table->foreign('country_id')->references('id')->on('countries');

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
        Schema::dropIfExists('identity_types');
    }
}
