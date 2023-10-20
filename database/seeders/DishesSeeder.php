<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class DishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('dishes')->insert([
            'restaurant_id' => $faker->randomDigit(1, 100),
            'name' => $faker->words(2, true),
            'description' => $faker->sentence(),
            'ingredients' => $faker->words(5, true),
            'visible' => $faker->numberBetween(0, 1),
            'price' =>  $faker->randomFloat(1, 10, 30),
        ]);
    }
}
