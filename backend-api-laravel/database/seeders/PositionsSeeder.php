<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Database\traits\DisableForeignKeys;
use Database\traits\TruncateTable;
use Illuminate\Support\Facades\DB;


class PositionsSeeder extends Seeder
{
    use DisableForeignKeys;
    use TruncateTable;

    public function run()
    {
        $faker = Faker::create('es_AR');
        $this->disableForeignKeys();
        $this->truncate("positions");
    	foreach (range(1,2000) as $index) {
            $company = $faker->company;
	        DB::table('positions')->insert([
                'company_id' => rand(1, 324),
                'person_id' => rand(1, 3003),
                'name' => $faker->jobTitle,
                'phone' => $faker->phoneNumber,
	        ]);
	    }
        $this->enableForeignKeys();
    }
}
