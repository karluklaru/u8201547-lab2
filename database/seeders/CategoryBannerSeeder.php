<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryBannerSeeder extends Seeder
{
    
    public function run(): void
    {
        
        \App\Models\CategoryBanner::factory(100)->create();
     
    }

}
