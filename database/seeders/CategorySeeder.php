<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            ['category_name' =>'makanan berat'],
            ['category_name' =>'makanan ringan'],
            ['category_name' =>'minuman alcohol'],
            ['category_name' =>'minuman panas'],
            ['category_name' =>'minuman dingin']
        ]);
    }
}
