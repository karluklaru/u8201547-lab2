<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class CatalogBannerFactory extends Factory
{
   
    public function definition(): array
    {
        $catalogsIds = DB::table('catalogs')->pluck('id');
        $bannersIds = DB::table('banners')->pluck('id');

        return [
            'catalog_id' => fake()->randomElement($bannersIds),
            'banner_id' => fake()->randomElement($catalogsIds),
        ];
    }
}
