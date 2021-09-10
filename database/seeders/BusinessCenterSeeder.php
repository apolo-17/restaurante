<?php

namespace Database\Seeders;

use App\Models\BusinessCenter;
use Illuminate\Database\Seeder;

class BusinessCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessCenter::factory()->create(['name' => 'Norte']);
        BusinessCenter::factory()->create(['name' => 'Centro']);
        BusinessCenter::factory()->create(['name' => 'Pension']);
    }
}
