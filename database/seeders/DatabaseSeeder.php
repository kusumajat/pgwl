<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Risma Kusumajati',
            'email' => 'rkusumajati14@gmail.com',
            'password' => bcrypt('1234'),
        ]
    );

    User::factory()->create([
        'name' => 'Kusumajati',
        'email' => 'kusumajati@gmail.com',
        'password' => bcrypt('4321'),
    ]
);
    }
}
