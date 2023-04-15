<?php

namespace Database\Factories;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
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
                'active_since' => randomDateInRange(new DateTime("2015-01-01"), new DateTime("2018-01-01")),
                'active_until' => randomDateInRange(new DateTime("2018-01-01"), new DateTime("2022-01-01")),
                'link_in_banner' => 'http://'.fake()->sentence(10).'ru',
                'image_file' => fake()->sentence(10).'jpg',
            
        ];
    }
}

function randomDateInRange(DateTime $start, DateTime $end) {
    $randomTimestamp = mt_rand($start->getTimestamp(), $end->getTimestamp());
    $randomDate = new DateTime();
    $randomDate->setTimestamp($randomTimestamp);
    return $randomDate;
}
