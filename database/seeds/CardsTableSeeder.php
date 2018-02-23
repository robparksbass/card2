<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cards')->insert([
            'business_id' => '1',
            'user_id' => '1',
            'valid_date' => '2017-08-01',
            'expiration_date' => '2017-08-01'
        ]);

        DB::table('cards')->insert([
            'business_id' => '2',
            'user_id' => '2',
            'valid_date' => '2017-08-01',
            'expiration_date' => '2017-08-01'
        ]);

        DB::table('cards')->insert([
            'business_id' => '3',
            'user_id' => '3',
            'valid_date' => '2017-08-01',
            'expiration_date' => '2017-08-01'
        ]);
    }
}