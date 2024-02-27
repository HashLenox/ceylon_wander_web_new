<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesTableSeeder::class);
        $this->call(userTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(RolePermissionTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(FeatureTableSeeder::class);


    }
}
