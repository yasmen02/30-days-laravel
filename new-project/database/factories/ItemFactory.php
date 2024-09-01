<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'author' => $this->faker->name(),
            'category_id' => Category::factory(),

        ];
    }
}
