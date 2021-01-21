<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Samsul Arifin',
            'email' => 'samsul@gmail.com',
            'email_verified_at' => '2021-01-21 19:53:09',
            'password' => bcrypt('12345678'),
            'remember_token'   => Str::random(60)
        ]);
        User::create([
            'name' => 'Willy Silalahi',
            'email' => 'willy@gmail.com',
            'email_verified_at' => '2021-01-21 19:53:09',
            'password' => bcrypt('12345678'),
            'remember_token'   => Str::random(60)
        ]);
    }
}
