<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class CategoryBannerFactory extends Factory
{
   
    public function definition(): array
    {
        $catalogsIds = DB::table('categories')->pluck('id');
        $bannersIds = DB::table('banners')->pluck('id');

        return [
            'category_id' => fake()->randomElement($bannersIds),
            'banner_id' => fake()->randomElement($catalogsIds),
        ];
    }
}
