<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\traits\DisableForeignKeys;
use Database\traits\TruncateTable;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LeaveTypeSeeder extends Seeder
{
    use DisableForeignKeys;
    use TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
