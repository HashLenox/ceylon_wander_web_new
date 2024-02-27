<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('role_user')->delete();

        \DB::table('role_user')->insert(
            array(
                0 =>
                    array(
                        'role_id' => 1,
                        'user_id' => 1,
                        'created_at' => '2023-08-28 13:50:55',
                        'updated_at' => '2023-08-28 13:50:55',
                    ),
            )
        );
    }
}
