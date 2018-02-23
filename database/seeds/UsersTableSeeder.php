<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'last_name' => 'Paycheck',
            'first_name' => 'Johnny',
            'email' => 'johnny@paycheck.com',
            'password' => 'test',
            'user_level' => '1'
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'last_name' => 'Jones',
            'first_name' => 'George',
            'email' => 'george@jones.com',
            'password' => 'test',
            'user_level' => '2'
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'last_name' => 'Shaver',
            'first_name' => 'Billy Joe',
            'email' => 'billyjoe@shaver.com',
            'password' => 'test',
            'user_level' => '3'
        ]);
    }
}
