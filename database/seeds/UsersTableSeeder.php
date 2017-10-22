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

        User::create(array(
            'name'     => 'User plan 1',
            'email'    => 'user1@apareix.com',
            'password' => bcrypt('user'),
        ));

        User::create(array(
            'name'     => 'User plan 2',
            'email'    => 'user2@apareix.com',
            'password' => bcrypt('user'),
        ));

        User::create(array(
            'name'     => 'User plan 3',
            'email'    => 'user3@apareix.com',
            'password' => bcrypt('user'),
        ));

        factory(App\Models\User::class, 5)->create();
    }
}
