<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->delete();

        DB::table('cities')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'district_id' => 5,
                        'name_en' => 'Colombo 15',
                        'name_si' => 'කොළඹ 15',
                        'name_ta' => 'கொழும்பு 15',
                        'sub_name_en' => 'Modara',
                        'sub_name_si' => 'මෝදර',
                        'sub_name_ta' => 'முகத்துவாரம்',
                        'postcode' => '01500',
                        'latitude' => '6.96547650',
                        'longitude' => '79.87083950',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),
                1 =>
                    array(
                        'id' => 2,
                        'district_id' => 5,
                        'name_en' => 'Athurugiriya',
                        'name_si' => 'අතුරුගිරිය',
                        'name_ta' => 'அத்துருகிரிய',
                        'sub_name_en' => NULL,
                        'sub_name_si' => NULL,
                        'sub_name_ta' => NULL,
                        'postcode' => '10150',
                        'latitude' => '6.87231850',
                        'longitude' => '80.00038750',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),
                2 =>
                    array(
                        'id' => 3,
                        'district_id' => 5,
                        'name_en' => 'Avissawella',
                        'name_si' => 'අවිස්සාවේල්ල',
                        'name_ta' => 'அவிசாவளை',
                        'sub_name_en' => NULL,
                        'sub_name_si' => NULL,
                        'sub_name_ta' => NULL,
                        'postcode' => '10700',
                        'latitude' => '6.95432890',
                        'longitude' => '80.20457680',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),
                3 =>
                    array(
                        'id' => 4,
                        'district_id' => 5,
                        'name_en' => 'Battaramulla',
                        'name_si' => 'බත්තරමුල්ල',
                        'name_ta' => 'பத்தரமுல்லை',
                        'sub_name_en' => NULL,
                        'sub_name_si' => NULL,
                        'sub_name_ta' => NULL,
                        'postcode' => '10120',
                        'latitude' => '6.89838190',
                        'longitude' => '79.91784130',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),

                4 =>
                    array(
                        'id' => 5,
                        'district_id' => 5,
                        'name_en' => 'Biyagama',
                        'name_si' => 'බියගම',
                        'name_ta' => 'பியகம',
                        'sub_name_en' => NULL,
                        'sub_name_si' => NULL,
                        'sub_name_ta' => NULL,
                        'postcode' => '11650',
                        'latitude' => '6.94621530',
                        'longitude' => '79.98920340',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),

                5 =>
                    array(
                        'id' => 6,
                        'district_id' => 5,
                        'name_en' => 'Homagama',
                        'name_si' => 'හෝමාගම',
                        'name_ta' => 'ஹோமாகம',
                        'sub_name_en' => NULL,
                        'sub_name_si' => NULL,
                        'sub_name_ta' => NULL,
                        'postcode' => '10200',
                        'latitude' => '6.84327620',
                        'longitude' => '80.00318330',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),

                6 =>
                    array(
                        'id' => 7,
                        'district_id' => 6,
                        'name_en' => 'Batapola',
                        'name_si' => 'බටපොල',
                        'name_ta' => 'படபொல',
                        'sub_name_en' => NULL,
                        'sub_name_si' => NULL,
                        'sub_name_ta' => NULL,
                        'postcode' => '80320',
                        'latitude' => '6.22418210',
                        'longitude' => '80.11383690',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),

                7 =>
                    array(
                        'id' => 8,
                        'district_id' => 6,
                        'name_en' => 'Galle',
                        'name_si' => 'ගාල්ල',
                        'name_ta' => 'காலி',
                        'sub_name_en' => NULL,
                        'sub_name_si' => NULL,
                        'sub_name_ta' => NULL,
                        'postcode' => '80000',
                        'latitude' => '6.04819180',
                        'longitude' => '80.21539980',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),

                8 =>
                    array(
                        'id' => 9,
                        'district_id' => 5,
                        'name_en' => 'Ambalangoda',
                        'name_si' => 'අම්බලන්ගොඩ',
                        'name_ta' => 'அம்பலாங்கொடை',
                        'sub_name_en' => NULL,
                        'sub_name_si' => NULL,
                        'sub_name_ta' => NULL,
                        'postcode' => '80300',
                        'latitude' => '6.77508470',
                        'longitude' => '79.96543240',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),

                9 =>
                    array(
                        'id' => 10,
                        'district_id' => 5,
                        'name_en' => 'Kottawa',
                        'name_si' => 'කොට්ටාව',
                        'name_ta' => 'கொட்டாவ',
                        'sub_name_en' => NULL,
                        'sub_name_si' => NULL,
                        'sub_name_ta' => NULL,
                        'postcode' => '10220',
                        'latitude' => '6.84116520',
                        'longitude' => '79.96543240',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),

                10 =>
                    array(
                        'id' => 11,
                        'district_id' => 5,
                        'name_en' => 'Colombo 8',
                        'name_si' => 'කොළඹ 8',
                        'name_ta' => 'கொழும்பு 8',
                        'sub_name_en' => 'Borella',
                        'sub_name_si' => 'බොරැල්ල',
                        'sub_name_ta' => 'பொறளை',
                        'postcode' => '00800',
                        'latitude' => '6.91217960',
                        'longitude' => '79.88288280',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),

                11 =>
                    array(
                        'id' => 12,
                        'district_id' => 5,
                        'name_en' => 'Colombo 2',
                        'name_si' => 'කොළඹ 2',
                        'name_ta' => 'கொழும்பு 2',
                        'sub_name_en' => 'Slave Island',
                        'sub_name_si' => 'කොම්පඤ්ඤ වීදිය',
                        'sub_name_ta' => 'கொம்பனித்தெரு',
                        'postcode' => '00200',
                        'latitude' => '6.91993310',
                        'longitude' => '79.85402740',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),
            )
        );
    }
}
