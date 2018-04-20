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
            'valid_date' => '2018-04-19',
            'expiration_date' => '2019-04-19'
        ]);
    }
}