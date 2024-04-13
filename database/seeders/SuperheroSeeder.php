<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Superhero;

class SuperheroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $superheroes = [
            [
                'hero_name' => 'Superman',
                'real_name' => 'Clark Kent',
                'gender' => 'Male',
                'universe_id' => 1, 
                'logo_id' => 1, 
                'active' => true,
            ],
            [
                'hero_name' => 'Batman',
                'real_name' => 'Bruce Wayne',
                'gender' => 'Male',
                'universe_id' => 1, 
                'logo_id' => 2, 
                'active' => true,
            ],
            [
                'hero_name' => 'Wonder Woman',
                'real_name' => 'Diana Prince',
                'gender' => 'Female',
                'universe_id' => 1, 
                'logo_id' => 3, 
                'active' => true,
            ],
        ];

    }
}
