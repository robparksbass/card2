<?php

use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('businesses')->insert([
            'business_name' => 'Bywater',
            'address_line_1' => '796 Riverside Dr',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-555-5555',
            'website_url' => 'http://www.bywater.bar/',
            'img_front' => 'img/cards/bywater_front.jpg',
            'img_back' => 'img/cards/bywater_back.jpg'
        ]);
        
        DB::table('businesses')->insert([
            'business_name' => 'Desoto Lounge',
            'address_line_1' => '504 Haywood Rd',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28806',
            'phone' => '828-255-1109',
            'website_url' => 'http://www.desotolounge.com/',
            'img_front' => 'img/cards/desoto_front.jpg',
            'img_back' => 'img/cards/desoto_back.jpg'
        ]);

        DB::table('businesses')->insert([
            'business_name' => 'Ole Shakeys',
            'address_line_1' => '790 Riverside Dr',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-545-6985',
            'website_url' => 'https://www.oleshakeys.com/',
            'img_front' => 'img/cards/shakeys_front.jpg',
            'img_back' => 'img/cards/shakeys_back.jpg'
        ]);
        
        DB::table('businesses')->insert([
            'business_name' => 'Lazy Diamond',
            'address_line_1' => '4 Woodfin St',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-575-9676',
            'website_url' => 'https://www.facebook.com/TheLazyDiamondBar/',
            'img_front' => 'img/cards/lazydiamond_front.jpg',
            'img_back' => 'img/cards/lazydiamond_back.jpg'
        ]);

        DB::table('businesses')->insert([
            'business_name' => 'Adam Dalton Distillery',
            'address_line_1' => '251 Biltmore Ave',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-785-1499',
            'website_url' => 'https://www.daltondistillery.com/',
            'img_front' => 'img/cards/dalton_front.jpg',
            'img_back' => 'img/cards/dalton_back.jpg'
        ]);
    }
}
