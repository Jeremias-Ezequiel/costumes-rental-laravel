<?php

namespace Database\Seeders;

use App\Models\CostumeStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CostumeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CostumeStatus::insert([
            ['id' => 1, 'description' => 'available'],
            ['id' => 2, 'description' => 'rented'],
            ['id' => 3, 'description' => 'maintenance'],
            ['id' => 4, 'description' => 'retired'],
        ]);
    }
}
