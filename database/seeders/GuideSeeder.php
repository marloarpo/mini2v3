<?php

namespace Database\Seeders;

use App\Models\Guides;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guides::factory(20)->create();
    }
}
