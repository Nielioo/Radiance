<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'role' => 'admin',
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@radiance.com',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('users')->insert(
            [
                'role' => 'user',
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@radiance.com',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
