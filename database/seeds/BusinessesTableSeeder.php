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
            'google_maps_url' => 'https://goo.gl/maps/1uwLgdtp23L2'
        ]);
        
        DB::table('businesses')->insert([
            'business_name' => 'Desoto Lounge',
            'address_line_1' => '504 Haywood Rd',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28806',
            'phone' => '828-255-1109',
            'website_url' => 'http://www.desotolounge.com/',
            'google_maps_url' => 'https://goo.gl/maps/3px2fQCTrzo'
        ]);

        DB::table('businesses')->insert([
            'business_name' => 'Ole Shakeys',
            'address_line_1' => '790 Riverside Dr',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-545-6985',
            'website_url' => 'https://www.oleshakeys.com/',
            'google_maps_url' => 'https://goo.gl/maps/C1hq4jVXB8p'
            
        ]);
        
        DB::table('businesses')->insert([
            'business_name' => 'Lazy Diamond',
            'address_line_1' => '4 Woodfin St',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-575-9676',
            'website_url' => 'https://www.facebook.com/TheLazyDiamondBar/',
            'google_maps_url' => 'https://goo.gl/maps/8ykwiJR7BDS2'
        ]);

        DB::table('businesses')->insert([
            'business_name' => 'Adam Dalton Distillery',
            'address_line_1' => '251 Biltmore Ave',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-785-1499',
            'website_url' => 'https://www.daltondistillery.com/',
            'google_maps_url' => 'https://goo.gl/maps/HTV2uFEqk6x'
        ]);

        DB::table('businesses')->insert([
            'business_name' => 'Crucible Bar',
            'address_line_1' => '140A Roberts St',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-575-9995',
            'website_url' => 'https://www.facebook.com/cruciblebaravl/',
            'google_maps_url' => 'https://goo.gl/maps/aXTdUQBZydu'
        ]);

        DB::table('businesses')->insert([
            'business_name' => 'Asheville Yacht Club',
            'address_line_1' => '87 Patton Ave',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-255-8454',
            'website_url' => 'http://ashevilleyachtclub.com/',
            'google_maps_url' => 'https://goo.gl/maps/KB4UN1viRGQ2'
        ]);

        DB::table('businesses')->insert([
            'business_name' => 'Broadways',
            'address_line_1' => '120 N Lexington Ave',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-285-0400',
            'website_url' => 'https://www.facebook.com/pages/Broadways/1677256582488651',
            'google_maps_url' => 'https://goo.gl/maps/uhjqZKK9Mnp'
        ]);

        DB::table('businesses')->insert([
            'business_name' => 'The Double Crown',
            'address_line_1' => '375 Haywood Rd',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28806',
            'phone' => '828-412-5491',
            'website_url' => 'http://www.thedoublecrown.com/',
            'google_maps_url' => 'https://goo.gl/maps/ijvzh2ZWhHy'
        ]);

        DB::table('businesses')->insert([
            'business_name' => 'The Prospect',
            'address_line_1' => '11 Buxton Ave',
            'city' => 'Asheville',
            'state' => 'NC',
            'zip_code' => '28801',
            'phone' => '828-505-0766',
            'website_url' => 'https://www.facebook.com/The-Prospect-300957522257/',
            'google_maps_url' => 'https://goo.gl/maps/zz8jUFPZhns'
        ]);
    }
}
