<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'khanamdev@gmail.com',
            'password' => Hash::make('12345678'),
            'first_name' => 'Kha',
            'last_name' => 'Nam',
            'phone_number' => '0971598926',
            'country_code' => '+84',
            'address' => 'Ha Noi, Vietnam',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
