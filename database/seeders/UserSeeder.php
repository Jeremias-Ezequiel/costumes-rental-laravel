<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jeremias Ezequiel',
            'email' => 'jere@test.com',
            'password' => 'abc123',
            'created_at' => now(),
            'updated_at' => now(),
            'rol_id' => 1,
            'lastname' => 'Omonte',
            'username' => 'zedev',
        ]);
    }
}
