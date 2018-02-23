<?php

use Illuminate\Database\Seeder;

class HoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('hours')->insert([
            'business_id' => '1',
            'mon_open' => '12:00:00',
            'mon_close' => '18:00:00',
            'tues_open' => '12:00:00',
            'tues_close' => '18:00:00',
            'wed_open' => '12:00:00',
            'wed_close' => '18:00:00',
            'thurs_open' => '12:00:00',
            'thurs_close' => '18:00:00',
            'fri_open' => '12:00:00',
            'fri_close' => '18:00:00',
            'sat_open' => '12:00:00',
            'sat_close' => '18:00:00',
            'sun_open' => '12:00:00',
            'sun_close' => '18:00:00',
        ]);

        DB::table('hours')->insert([
            'business_id' => '2',
            'mon_open' => '12:00:00',
            'mon_close' => '18:00:00',
            'tues_open' => '12:00:00',
            'tues_close' => '18:00:00',
            'wed_open' => '12:00:00',
            'wed_close' => '18:00:00',
            'thurs_open' => '12:00:00',
            'thurs_close' => '18:00:00',
            'fri_open' => '12:00:00',
            'fri_close' => '18:00:00',
            'sat_open' => '12:00:00',
            'sat_close' => '18:00:00',
            'sun_open' => '12:00:00',
            'sun_close' => '18:00:00',
        ]);
        DB::table('hours')->insert([
            'business_id' => '3',
            'mon_open' => '12:00:00',
            'mon_close' => '18:00:00',
            'tues_open' => '12:00:00',
            'tues_close' => '18:00:00',
            'wed_open' => '12:00:00',
            'wed_close' => '18:00:00',
            'thurs_open' => '12:00:00',
            'thurs_close' => '18:00:00',
            'fri_open' => '12:00:00',
            'fri_close' => '18:00:00',
            'sat_open' => '12:00:00',
            'sat_close' => '18:00:00',
            'sun_open' => '12:00:00',
            'sun_close' => '18:00:00',
        ]);
    }
}