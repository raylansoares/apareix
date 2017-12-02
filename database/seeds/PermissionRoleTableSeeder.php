<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $pr = [
            // role 1 = Master Admin
            // role 2 = Add instagram acc
            // role 3 = list instagram acc
            // role 4 = delete instagram acc
            ['permission_id' => 1, 'role_id' => 1],

            ['permission_id' => 2, 'role_id' => 1],
            ['permission_id' => 3, 'role_id' => 1],


            ['permission_id' => 2, 'role_id' => 2],
            ['permission_id' => 3, 'role_id' => 3],
        ];

        DB::table('permission_role')->insert($pr);
    }
}
