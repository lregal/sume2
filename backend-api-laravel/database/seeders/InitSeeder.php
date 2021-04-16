<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\User;

use Database\traits\TruncateTable;
use Database\traits\DisableForeignKeys;
use Illuminate\Support\Facades\DB;


class InitSeeder extends Seeder
{
    use DisableForeignKeys;
    use TruncateTable;

    public function run()
    {
        $this->disableForeignKeys();
        $this->userTypes();
        $this->users();
        $this->permissions();
        $this->userPermissions();
        $this->companyTypes();
        $this->languages();
        $this->enableForeignKeys();
    }

    protected function userTypes() {

        $this->truncate("user_types");
        DB::table('user_types')
            ->insert([
                [
                    'name' => 'Guest',
                    'read' => true,
                    'insert' => false,
                    'update' => false,
                    'delete' => false,
                    'admin' => false,
                    'active' => true,
                ],
                [
                    'name' => 'User',
                    'read' => true,
                    'insert' => true,
                    'update' => true,
                    'delete' => true,
                    'admin' => false,
                    'active' => true,
                ],
                [
                    'name' => 'Admin',
                    'read' => true,
                    'insert' => true,
                    'update' => true,
                    'delete' => true,
                    'admin' => true,
                    'active' => true,
                ]
            ]);
    }

    protected function users() {
        $this->truncate("users");
        DB::table('users')
            ->insert([
                [
                    'name' => 'admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('1234'),
                    'user_type_id' => 3
                ]
            ]);
    }

    protected function permissions()  {
        $this->truncate("permissions");
        DB::table('permissions')
            ->insert([
                [
                    'name' => 'SUME',
                    'code' => 'SUME',
                    'path' => 'sume'
                ],
                [
                    'name' => 'administración',
                    'code' => 'ADMIN',
                    'path' => 'admin'
                ]
            ]);
    }

    protected function userPermissions() {
        $this->truncate("user_permissions");
        DB::table('user_permissions')
            ->insert([
                ['user_id' => 1,'permission_id' => 1],
                ['user_id' => 1,'permission_id' => 2]
            ]);

    }

    protected function companyTypes() {
        $this->truncate("company_types");
        DB::table('company_types')
            ->insert([
                ['name' => 'Privada','code' => 'PRI'],
                ['name' => 'Pública','code' => 'PUB'],
                ['name' => 'Mixta','code' => 'MIX'],
                ['name' => 'Sin fines de Lucro','code' => 'ONG'],
            ]);
    }

    protected function languages(): void
    {
        $this->truncate("languages");
        DB::table('languages')
            ->insert([
                ['name' => 'Español', 'priority' => 1],
                ['name' => 'Inglés', 'priority' => 2],
            ]);
    }


    protected function companyDataTypes() {
        $this->truncate('company_data_types');
    }

}
