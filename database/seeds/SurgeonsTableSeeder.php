<?php

use Illuminate\Database\Seeder;

class SurgeonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surgeons')->insert([
            'first_name' => 'Tywin',
            'last_name' => 'Lannister',
            'email' => 'tywin@lannister.com'
        ]);
        DB::table('surgeons')->insert([
            'first_name' => 'Olenna',
            'last_name' => 'Tyrell',
            'email' => 'olenna@tyrell.com'
        ]);
        DB::table('surgeons')->insert([
            'first_name' => 'Ned',
            'last_name' => 'Stark',
            'email' => 'ned@stark.com'
        ]);
    }
}
