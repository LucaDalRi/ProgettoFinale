<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'lastname' => fake()->lastName(),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'status' => fake()->boolean(),
            'totalprice' => fake()->randomFloat(2, 1, 100),
            'created_at' => fake()->dateTime(now()),
            'updated_at' => fake()->dateTime(now())
        ];
    }
}

            // $table->string('name');
            // $table->string('lastname');
            // $table->string('address');
            // $table->string('phone');
            // $table->boolean('status')->default(1);
            // $table->decimal('totalprice',10,2)->default(0);
            // $table->timestamps();
            