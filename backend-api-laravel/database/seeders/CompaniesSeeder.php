<?php

namespace Database\Seeders;

use Database\traits\DisableForeignKeys;
use Database\traits\TruncateTable;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    use DisableForeignKeys;
    use TruncateTable;

    public function run()
    {
        $faker = Faker::create('es_AR');

        $this->disableForeignKeys();
        $this->truncate("companies");


    	foreach (range(1,50) as $index) {
            $company = $faker->company;
	        DB::table('companies')->insert([
                'name' => $company,
                'business_name' => $company,
                'company_type_id' => rand(1, 4),
                'email' => $faker->email,
                'single_tax_identification_number' => $faker->numerify('###########'),
	        ]);
	    }

    	$this->enableForeignKeys();
    }
}
