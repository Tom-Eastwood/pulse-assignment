<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'first_name' => 'Arya',
            'last_name' => 'Stark',
            'email' => 'arya@stark.com',
            'phone1' => '555',
            'phone2' => '897',
            'phone3' => '1234',
            'gender' => 'Female',
            'age' => '12',
            'surgeon_id' => '3'
        ]);
        DB::table('patients')->insert([
            'first_name' => 'Jon',
            'last_name' => 'Snow',
            'email' => 'jon@snow.com',
            'phone1' => '552',
            'phone2' => '123',
            'phone3' => '1554',
            'gender' => 'Male',
            'age' => '20',
            'surgeon_id' => '3'
        ]);
        DB::table('patients')->insert([
            'first_name' => 'Tyrion',
            'last_name' => 'Lannister',
            'email' => 'tyrion@lannister.com',
            'phone1' => '234',
            'phone2' => '098',
            'phone3' => '3994',
            'gender' => 'Male',
            'age' => '30',
            'surgeon_id' => '1'
        ]);
    }
}
