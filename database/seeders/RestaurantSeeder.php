<?php

namespace Database\Seeders;

use App\Models\Restaurant;
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
        $restaurants = [
            [
                'name' => 'Nannarella',
                'address' => 'Roma, via Cagliari 70',
                'piva' => '12345678910',
                'photo' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Da Felice',
                'address' => 'Roma, via Condotti 7',
                'piva' => '12345678911',
                'photo' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Trattoria romana',
                'address' => 'Roma, via del Corso 10',
                'piva' => '12345678912',
                'photo' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Cracco',
                'address' => 'Milano, via Duomo 10',
                'piva' => '12345678913',
                'photo' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Sorbillo',
                'address' => 'Milano, via Cagliari 10',
                'piva' => '12345678914',
                'photo' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Da Michele',
                'address' => 'Napoli, via Firenze 710',
                'piva' => '12345678915',
                'photo' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Sushi zen',
                'address' => 'Roma, via Appia 120',
                'piva' => '12345678916',
                'photo' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Old wild west',
                'address' => 'Milano, via Milano 5',
                'piva' => '12345678917',
                'photo' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => "McDonald's",
                'address' => 'Cagliari, via Roma 7',
                'piva' => '12345678918',
                'photo' => 'https://picsum.photos/200/300'
            ]
        ];
        foreach ($restaurants as $restaurant) {
            $newRestaurant = new Restaurant();
            $newRestaurant->user_id = fake()->numberBetween(1,4);
            $newRestaurant->name = $restaurant['name'];
            $newRestaurant->address = $restaurant['address'];
            $newRestaurant->piva = $restaurant['piva'];
            $newRestaurant->photo = $restaurant['photo'];
            $newRestaurant->save();
        }
    }
}
