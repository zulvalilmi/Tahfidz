<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                // Admin (mii)
                'name'          => 'Mii',
                'username'      => 'mii',
                'email'         => 'mii@gmail.com',
                'password'      => Hash::make('12345678'),
                'role'          => 1,
            ),
        ));
    }
}
