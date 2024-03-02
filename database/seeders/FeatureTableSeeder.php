<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->delete();

        DB::table('features')->insert(
            array(

                0 =>
                array(
                    'id' => 1,
                    'name' => 'None',
                    'slug' => 'None',
                ),

                1 =>
                array(
                    'id' => 2,
                    'name' => 'Attached Bathroom',
                    'slug' => 'bathroom',
                ),
                2 =>
                array(
                    'id' => 3,
                    'name' => 'Shared Bathroom',
                    'slug' => 'sharedbathroom',
                ),
                3 =>
                array(
                    'id' => 4,
                    'name' => 'Air Condition',
                    'slug' => 'aircondition',
                ),
                4 =>
                array(
                    'id' => 5,
                    'name' => 'Tap water',
                    'slug' => 'tapwater',
                ),

            )
        );
    }
}
