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
            'name' => 'punct',
            'email' => 'punctuationmarks@protonmail.com',
        ]);
        DB::table('users')->insert([
            'name' => 'Jack',
            'email' => 'jack_georgopulos2@aol.com',
        ]);
    }
}
