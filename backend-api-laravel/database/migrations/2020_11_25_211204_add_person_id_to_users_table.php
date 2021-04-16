<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class AddPersonIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $users) {
           if(!Schema::hasColumn('users','person_id'))
                $users->bigInteger('person_id')->default(1)->unsigned();

           $users->foreign('person_id','userPersonFk')
               ->references('id')
               ->on('people')
               ->restrictOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function (Blueprint $users){
            $users->dropForeign('userPersonFk');
            $users->removeColumn('person_id');
        });
        Schema::dropIfExists('person');
    }
}
