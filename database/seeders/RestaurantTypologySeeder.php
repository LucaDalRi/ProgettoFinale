<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantTypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = Restaurant::all();

        foreach ($restaurants as $restaurant) {
            $restaurant->typologies()->attach(Typology::inRandomOrder()->first()->id);
        }
    }
}
