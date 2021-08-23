<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
           'name' => 'Administrator',
           'email' => 'admin@tdi.pt',
           'password' => Hash::make('admin123'),
           'role_id' => 1,
        ]);

        \App\User::create([
            'name' => 'User',
            'email' => 'user@tdi.pt',
            'password' => Hash::make('user123'),
            'role_id' => 2,
        ]);

//        factory('App\User', 20)->create();
    }
}
