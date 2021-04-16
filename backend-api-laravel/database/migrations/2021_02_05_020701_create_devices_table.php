<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alias');
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('owner_company_id')->nullable();
            $table->unsignedBigInteger('owner_person_id')->nullable();

            $table->foreign('owner_company_id')->references('id')->on('companies');
            $table->foreign('owner_person_id')->references('id')->on('people');

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
        Schema::dropIfExists('devices');
    }
}
