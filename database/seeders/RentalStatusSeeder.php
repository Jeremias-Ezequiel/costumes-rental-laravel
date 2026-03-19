<?php

namespace Database\Seeders;

use App\Models\RentalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RentalStatus::insert([
            ['id' => 1, 'description' => 'pending'],
            ['id' => 2, 'description' => 'reserved'],
            ['id' => 3, 'description' => 'completed'],
            ['id' => 4, 'description' => 'canceled'],
            ['id' => 5, 'description' => 'returned'],
        ]);
    }
}
