<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin SI-HIBAH',
            'username' => 'admin',
            'email' => 'admin@sihibah.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);
    }
}
