<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 100),
            'quantity' => $this->faker->numberBetween(0, 100),
        ];
    }
}
