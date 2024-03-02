<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'admin_polres',
                'nik' => '1234567891234567',
                'phone_number' => '123456789012',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'user_role' => 'admin polres',
            
            ]);
    }
}
