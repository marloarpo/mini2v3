<?php

namespace Database\Seeders;

use App\Models\Municipalities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Municipalities::factory(4)->create();
    }
}
