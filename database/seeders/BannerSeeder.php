<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class BannerSeeder extends Seeder
{
    
    
    public function run(): void
    {
        \App\Models\Banner::factory(100)->create();
        
    }
}




