<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Order;
use Illuminate\Database\Seeder;

class DishOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = Dish::all();
        $orders = Order::all()->pluck('id')->toArray();

        foreach ($dishes as $dish) {
            $rndNum = fake()->numberBetween(1, 10);
            $orderIds = fake()->randomElements($orders, 5);
            $dish->orders()->attach($orderIds, ['quantity' => $rndNum, 'created_at' => now(), 'updated_at' => now()]);
        }
    }
}
