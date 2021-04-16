<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveAllowedDaysRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_allowed_days_rules', function (Blueprint $table) {
            $table->id();
            $table->enum('days_type',config('enums.days_type'));
            $table->unsignedSmallInteger('number_of_days');
            $table->enum('rule_scope',config('enums.rule_scope'));
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
        Schema::dropIfExists('leave_allowed_days_rules');
    }
}
