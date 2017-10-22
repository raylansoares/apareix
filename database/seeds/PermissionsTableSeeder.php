<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            ['name' => 'full_access', 'description' => 'Has access to all Admin System.'],
            ['name' => 'add_instagram_acc', 'description' => 'Has access to add new instagram acc.'],
            ['name' => 'list_instagram_acc', 'description' => 'Has access to list all instagram acc on sys.'],
            ['name' => 'delete_instagram_acc', 'description' => 'Has access to delete instagram acc on sys.'],
        ];

        DB::table('permissions')->insert($permissions);
    }
}
