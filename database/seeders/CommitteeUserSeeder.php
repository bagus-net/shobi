<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CommitteeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Panitia Dafi',
            'email' => 'panitia@dafi.com',
            'password' => Hash::make('password123'), // Change to a secure password
            'role' => 'panitia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
