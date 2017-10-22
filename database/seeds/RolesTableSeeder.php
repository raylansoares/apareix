<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'Master Admin', 'description' => 'It has full access to all areas of admin dashboard.'],
            ['name' => 'Plan 1', 'description' => 'Description for plan one'],
            ['name' => 'Plan 2', 'description' => 'Description for plan two'],
            ['name' => 'Plan 3', 'description' => 'Description for plan three'],
        ];

        DB::table('roles')->insert($roles);
    }
}
