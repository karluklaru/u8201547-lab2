<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use DateTime;

class CatalogBanner extends Seeder
{
    
    public function run(): void
    {
        
        \App\Models\CatalogBanner::factory(100)->create();
     
    }

}
