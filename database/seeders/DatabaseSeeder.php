<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{       
    \App\Models\Brand::factory(6)->create();
    \App\Models\Category::factory(6)->create();
    \App\Models\Product::factory(24)->create();
}
}
