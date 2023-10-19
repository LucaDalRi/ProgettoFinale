<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('restaurants')->insert([
            'user_id' => $faker->randomDigit(1, 10),
            'name' => $faker->firstNameMale(),
            'address' => $faker->streetAddress(),
            'piva' => $faker->ein(),
            'photo' => 'https://picsum.photos/200/300',
        ]);
    }
}
