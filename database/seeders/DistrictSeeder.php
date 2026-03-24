<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('districts')->insert([
            ['province_id' => 1, 'name' => 'Colombo'],
            ['province_id' => 1, 'name' => 'Gampaha'],
            ['province_id' => 2, 'name' => 'Kandy'],
        ]);
    }
}
