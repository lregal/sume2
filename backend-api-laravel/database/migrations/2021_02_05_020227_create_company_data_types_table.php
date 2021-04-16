<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDataTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_data_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('min_limit')->nullable();
            $table->integer('max_limit')->nullable();
            $table->string('value_type');
            $table->json('allowed_values')->nullable();
            $table->boolean('active')->default(true);
            $table->string('value_regex')->nullable();

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
        Schema::dropIfExists('company_data_types');
    }
}
