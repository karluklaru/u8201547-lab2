<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catalog>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->text(15);
        return [
            'name' => $name,
                'is_active' => true,
                'code' => Str::slug($name, '-'),
                'created_date' => randomDateInRange(new DateTime("2019-01-01"), new DateTime("2022-01-01")),
                'parent_category' => fake()->text(20),
                
        ];
    }
}
