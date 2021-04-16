<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use Database\traits\DisableForeignKeys;
use Database\traits\TruncateTable;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    use DisableForeignKeys;
    use TruncateTable;
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_AR');
        $this->disableForeignKeys();
        $this->truncate("people");
    	foreach (range(1,300) as $index) {
	        DB::table('people')->insert([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'distinction' => $faker->suffix,
                'language_id' => 1,
	            'email' => $faker->email,
	            'phone' => $faker->phoneNumber,
	        ]);
	    }
        $this->enableForeignKeys();
    }
}
