<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'name' => 'Developer Team',
                        'email' => 'developer@web.com',
                        'email_verified_at' => NULL,
                        'password' => Hash::make('pass1234'),
                        'remember_token' => NULL,
                        'created_at' => '2023-08-28 06:43:11',
                        'updated_at' => '2023-08-28 06:43:11',
                    ),
            )
        );
    }
}
