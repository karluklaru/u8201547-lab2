<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use DateTime;

class Catalog extends Seeder
{
    
    public function run(): void
    {
        
        \App\Models\Catalog::factory(100)->create();
     
    }

}
