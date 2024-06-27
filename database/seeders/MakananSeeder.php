<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makanan')->insert([
            [
                'nama' => 'Nasi Goreng',
                'price' => 20000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '10 minutes',
                'category_id' => 1, 
            ],
            [
                'nama' => 'Mie Goreng',
                'price' => 18000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '10 minutes',
                'category_id' => 1, 
            ],
            [
                'nama' => 'Sate Ayam',
                'price' => 25000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '15 minutes',
                'category_id' => 1, 
            ],
            [
                'nama' => 'Bubur Ayam',
                'price' => 15000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '5 minutes',
                'category_id' => 1, 
            ],
            [
                'nama' => 'Kentang Goreng',
                'price' => 10000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '10 minutes',
                'category_id' => 2, 
            ],
            [
                'nama' => 'Nuget Ayam',
                'price' => 10000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '10 minutes',
                'category_id' => 2, 
            ],
            [
                'nama' => 'Nuget Champ',
                'price' => 10000.00,
                'tersedia' => 'yes',
                'waktu_penyajian' => '10 minutes',
                'category_id' => 2, 
            ],
        ]);
    }
}
