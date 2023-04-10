<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catalog>
 */
class CatalogFactory extends Factory
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
                'is_active' => true,
                'slug' => fake()->randomNumber(),
                'created_date' => randomDateInRange(new DateTime("2019-01-01"), new DateTime("2022-01-01")),
                'parent_category' => fake()->sentence(10),
                
        ];
    }
}
