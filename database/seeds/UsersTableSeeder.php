<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create(array(
            'name'     => 'Admin Apareix',
            'email'    => 'admin@apareix.com',
            'password' => bcrypt('admin'),
        ));

        factory(App\Models\User::class, 30)->create();
    }
}
