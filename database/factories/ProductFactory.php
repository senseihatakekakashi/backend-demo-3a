<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Arrays for more control
        $types = ['Smartphone', 'Backpack', 'Mechanical Keyboard', 'Coffee Maker', 'Desk Lamp'];
        $adjectives = ['Pro', 'Ultra', 'Wireless', 'Ergonomic', 'Portable', 'Vintage'];

        return [
            'name' => $this->faker->company() . ' ' . 
                  $this->faker->safeColorName() . ' ' . 
                  $this->faker->randomElement($adjectives) . ' ' . 
                  $this->faker->randomElement($types),
            'price' => $this->faker->randomFloat(2, 10, 9999.99), // 2 decimals, min 10, max based on (6,2)
            'category' => $this->faker->optional()->word(), // nullable() logic
        ];
    }
}
