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
            'first_name' => 'Default',
            'last_name' => 'User',
            'email' => 'default@pulseinfoframe.com',
            'password' => bcrypt('default123'),
        ]);
    }
}
