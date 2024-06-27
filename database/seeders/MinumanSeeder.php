<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('minuman')->insert([
            [
                'nama' => 'Teh Manis',
                'price' => 5000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '5 minutes',
                'category_id' => 5, 
            ],
            [
                'nama' => 'Teh Manis',
                'price' => 5000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '5 minutes',
                'category_id' => 4, 
            ],
            [
                'nama' => 'Kopi Hitam',
                'price' => 5000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '5 minutes',
                'category_id' => 4, 
            ],
            [
                'nama' => 'Jus Jeruk',
                'price' => 10000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '7 minutes',
                'category_id' => 5, 
            ],
            [
                'nama' => 'Jus Jambu',
                'price' => 10000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '7 minutes',
                'category_id' => 5, 
            ],
            [
                'nama' => 'jack daniel',
                'price' => 150000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '7 minutes',
                'category_id' => 3, 
            ],
            [
                'nama' => 'soju',
                'price' => 100000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '7 minutes',
                'category_id' => 3, 
            ],
        ]);
    }
}
