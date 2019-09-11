<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'user1@email.com',
            'is_admin' => '1',
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user2@email.com',
            'is_admin' => '0',
            'password' => bcrypt('user'),
        ]);
    }
}
