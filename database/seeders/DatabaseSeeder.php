<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Feature;
use App\Models\User;
use App\Models\Package;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' => bcrypt('123')
        ]);

        Feature::create([
            'image' => '',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Difference',
            'description' => 'Calculate Sum of two number',
            'required_credits' => 1,
            'active' => true
        ]);

        Feature::create([
            'image' => '',
            'route_name' => 'feature2.index',
            'name' => 'Calculate Difference',
            'description' => 'Calculate Sum of two number',
            'required_credits' => 2,
            'active' => true
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500
        ]);

        Package::create([
            'name' => 'Sliver',
            'price' => 30,
            'credits' => 300
        ]);
        Package::create([
            'name' => 'Bronze',
            'price' => 20,
            'credits' => 100
        ]);

    }
}
