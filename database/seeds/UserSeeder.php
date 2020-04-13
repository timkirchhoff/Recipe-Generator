<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tim',
            'email' => 'tkirchhoff@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Bob',
            'email' => 'bob@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);
    }
}
