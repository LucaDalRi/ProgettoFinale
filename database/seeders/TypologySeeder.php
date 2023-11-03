<?php

namespace Database\Seeders;

use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Typology::factory()->count(10)->create();
        $typologies = [
            [
                'name' => 'Italiano',
            ],
            [
                'name' => 'Giapponese',
            ],
            [
                'name' => 'Messicano',
            ],
            [
                'name' => 'Fastfood',
            ],
            [
                'name' => 'Pizzeria',
            ],
            
        ];

        foreach ($typologies as $typology) {
            $newTypology = new Typology();
            $newTypology->name = $typology['name'];
            $newTypology->save();
        }
    }
}
