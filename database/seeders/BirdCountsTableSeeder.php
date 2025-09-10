<?php

namespace Database\Seeders;

use App\Models\BirdCount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BirdCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BirdCount::factory(50)->create();
    }
}
