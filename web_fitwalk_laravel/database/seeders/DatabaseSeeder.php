<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\poster;
use App\Models\category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // User::create([
            
        // ]);
        category::create([
            'name' => 'straight',
            'slug' => 'straight',
        ]);

        category::create([
            'name' => 'gay',
            'slug' => 'gay',
        ]);
        
        poster::factory(20)->create();
    }
}
