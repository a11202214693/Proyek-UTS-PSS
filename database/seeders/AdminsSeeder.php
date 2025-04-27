<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminsSeeder extends Seeder
{
    public function run()
    {
        Admin::insert([
            ['username' => 'admin1', 'password' => Hash::make('password1'), 'email' => 'admin1@example.com'],
            ['username' => 'admin2', 'password' => Hash::make('password2'), 'email' => 'admin2@example.com'],
            ['username' => 'admin3', 'password' => Hash::make('password3'), 'email' => 'admin3@example.com'],
        ]);
    }
}
