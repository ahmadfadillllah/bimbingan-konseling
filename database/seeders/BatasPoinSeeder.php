<?php

namespace Database\Seeders;

use App\Models\BatasPoin;
use Illuminate\Database\Seeder;

class BatasPoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BatasPoin::insert([
            'nama' => 'FIKOM UMI',
            'poin' => 70,
        ]);
    }
}
