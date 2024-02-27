<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'name' => 'Wildlife',
                        'type' => '1',
                        'description' => 'Places possess a high level of biodiversity and wildlife resources',
                    ),
                1 =>
                    array(
                        'id' => 2,
                        'name' => 'Beaches',
                        'type' => '1',
                        'description' => 'Tropical beaches which are popular among both local and foreign tourists',
                    ),
                2 =>
                    array(
                        'id' => 3,
                        'name' => 'Natural scenic beauty',
                        'type' => '1',
                        'description' => 'Areas of natural scenic beauty, primarily including mountainous terrains, agricultural landscapes, waterfalls, places with diverse climatic conditions, reservoirs, and rivers.',
                    ),
                3 =>
                    array(
                        'id' => 4,
                        'name' => 'Heritage',
                        'type' => '1',
                        'description' => 'Pre-historic, proto-historic, and historic monuments, which bespeak its ancient civilization and culture.',
                    ),
                4 =>
                    array(
                        'id' => 5,
                        'name' => 'Hotel',
                        'type' => '2',
                        'description' => 'Comes in all shapes, sizes and personalities, from budget to luxury',
                    ),
                5 =>
                    array(
                        'id' => 6,
                        'name' => 'Apartment',
                        'type' => '2',
                        'description' => 'A self-contained housing unit that occupies part of a building, generally on a single storey',
                    ),
                6 =>
                    array(
                        'id' => 7,
                        'name' => 'Luxury Lodges',
                        'type' => '2',
                        'description' => 'Extremely accommodating and cater to the most discerning visitor',
                    ),
                7 =>
                    array(
                        'id' => 8,
                        'name' => 'Boutiques and Lodges',
                        'type' => '2',
                        'description' => 'Encompasses historic estates, vineyard cottages or boutique guest houses, typically providing unique facilities, location, service and guest experiences',
                    ),
                8 =>
                    array(
                        'id' => 9,
                        'name' => 'Chinese',
                        'type' => '3',
                        'description' => 'Sample Description',
                    ),

                9 =>
                    array(
                        'id' => 10,
                        'name' => 'Bakery',
                        'type' => '3',
                        'description' => 'Sample Description',
                    ),

                10 =>
                    array(
                        'id' => 11,
                        'name' => 'Fast Food',
                        'type' => '3',
                        'description' => 'Sample Description',
                    ),

                11 =>
                    array(
                        'id' => 12,
                        'name' => 'Street Food',
                        'type' => '3',
                        'description' => 'Sample Description',
                    ),
            )
        );
    }
}
