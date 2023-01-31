<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::insert([
            'nik' => '7371020210001234',
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin123@'),
            'no_hp' => '085213067944',
            'role' => 'admin',
            'mata_pelajaran' => 'Umum',
            'avatar' => 'user.png',
        ]);
    }
}
