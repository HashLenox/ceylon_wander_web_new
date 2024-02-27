<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('role_permission')->delete();

        \DB::table('role_permission')->insert(
            array(
                0 =>
                    array(
                        'role_id' => 1,
                        'permission_slug' => 'create role',
                        'created_at' => '2023-08-28 14:28:52',
                        'updated_at' => '2023-08-28 14:28:52',
                    ),
                1 =>
                    array(
                        'role_id' => 1,
                        'permission_slug' => 'create user',
                        'created_at' => '2023-08-28 14:28:52',
                        'updated_at' => '2023-08-28 14:28:52',
                    ),
                2 =>
                    array(
                        'role_id' => 1,
                        'permission_slug' => 'delete role',
                        'created_at' => '2023-08-28 14:28:52',
                        'updated_at' => '2023-08-28 14:28:52',
                    ),
                3 =>
                    array(
                        'role_id' => 1,
                        'permission_slug' => 'delete user',
                        'created_at' => '2023-08-28 14:28:52',
                        'updated_at' => '2023-08-28 14:28:52',
                    ),
                4 =>
                    array(
                        'role_id' => 1,
                        'permission_slug' => 'edit role',
                        'created_at' => '2023-08-28 14:28:52',
                        'updated_at' => '2023-08-28 14:28:52',
                    ),
                5 =>
                    array(
                        'role_id' => 1,
                        'permission_slug' => 'edit user',
                        'created_at' => '2023-08-28 14:28:52',
                        'updated_at' => '2023-08-28 14:28:52',
                    ),
                6 =>
                    array(
                        'role_id' => 1,
                        'permission_slug' => 'navigate user',
                        'created_at' => '2023-08-28 14:28:52',
                        'updated_at' => '2023-08-28 14:28:52',
                    ),
                7 =>
                    array(
                        'role_id' => 1,
                        'permission_slug' => 'view role',
                        'created_at' => '2023-08-28 14:28:52',
                        'updated_at' => '2023-08-28 14:28:52',
                    ),
                8 =>
                    array(
                        'role_id' => 1,
                        'permission_slug' => 'view user',
                        'created_at' => '2023-08-28 14:28:52',
                        'updated_at' => '2023-08-28 14:28:52',
                    ),
                9 =>
                    array(
                        'role_id' => 2,
                        'permission_slug' => 'view role',
                        'created_at' => '2023-08-28 14:29:24',
                        'updated_at' => '2023-08-28 14:29:24',
                    ),
                10 =>
                    array(
                        'role_id' => 2,
                        'permission_slug' => 'view user',
                        'created_at' => '2023-08-28 14:29:24',
                        'updated_at' => '2023-08-28 14:29:24',
                    ),
                11 =>
                    array(
                        'role_id' => 3,
                        'permission_slug' => 'navigate user',
                        'created_at' => '2023-08-28 14:29:42',
                        'updated_at' => '2023-08-28 14:29:42',
                    ),
                12 =>
                    array(
                        'role_id' => 3,
                        'permission_slug' => 'view role',
                        'created_at' => '2023-08-28 14:29:42',
                        'updated_at' => '2023-08-28 14:29:42',
                    ),
                13 =>
                    array(
                        'role_id' => 3,
                        'permission_slug' => 'view user',
                        'created_at' => '2023-08-28 14:29:42',
                        'updated_at' => '2023-08-28 14:29:42',
                    ),
                14 =>
                    array(
                        'role_id' => 4,
                        'permission_slug' => 'view role',
                        'created_at' => '2023-08-28 14:30:00',
                        'updated_at' => '2023-08-28 14:30:00',
                    ),
                15 =>
                    array(
                        'role_id' => 4,
                        'permission_slug' => 'view user',
                        'created_at' => '2023-08-28 14:30:00',
                        'updated_at' => '2023-08-28 14:30:00',
                    ),
            )
        );
    }
}
