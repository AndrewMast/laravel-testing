<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->for(
            Country::factory()->create([
                'name' => 'America',
            ]),
        )->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
