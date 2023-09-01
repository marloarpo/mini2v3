<?php

namespace Database\Seeders;

use App\Models\Climbers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClimberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Climbers::factory(30)->create();
    }
}
