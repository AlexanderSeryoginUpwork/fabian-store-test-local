<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'store_id' => rand(1,3),
            'title' => 'Product #' . $this->faker->randomDigit,
            'description' => $this->faker->realText(250),
            'status' => $this->faker->randomDigit
        ];
    }
}
