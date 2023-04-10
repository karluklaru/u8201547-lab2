<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class Banner extends Seeder
{
    
    
    public function run(): void
    {
        \App\Models\Banner::factory(100)->create();
        
    }
}




