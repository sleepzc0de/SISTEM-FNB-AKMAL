<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data makanan
        $makanan = [
            [
                'makanan_id' => 1, // ID makanan sesuai urutan seeder
                'harga' => 20000.00
            ],
            [
                'makanan_id' => 2,
                'harga' => 18000.00
            ],
            [
                'makanan_id' => 3,
                'harga' => 25000.00
            ],
            [
                'makanan_id' => 4,
                'harga' => 15000.00
            ],
            [
                'makanan_id' => 5,
                'harga' => 10000.00
            ],
            [
                'makanan_id' => 6,
                'harga' => 10000.00
            ],
            [
                'makanan_id' => 7,
                'harga' => 10000.00
            ],
        ];

        // Data minuman
        $minuman = [
            [
                'minuman_id' => 1, // ID minuman sesuai urutan seeder
                'harga' => 5000.00
            ],
            [
                'minuman_id' => 2,
                'harga' => 5000.00
            ],
            [
                'minuman_id' => 3,
                'harga' => 5000.00
            ],
            [
                'minuman_id' => 4,
                'harga' => 10000.00
            ],
            [
                'minuman_id' => 5,
                'harga' => 10000.00
            ],
            [
                'minuman_id' => 6,
                'harga' => 150000.00
            ],
            [
                'minuman_id' => 7,
                'harga' => 100000.00
            ],
        ];

        // Masukkan data makanan ke tabel menu
        foreach ($makanan as $item) {
            DB::table('menu')->insert([
                'makanan_id' => $item['makanan_id'],
                'harga' => $item['harga']
            ]);
        }

        // Masukkan data minuman ke tabel menu
        foreach ($minuman as $item) {
            DB::table('menu')->insert([
                'minuman_id' => $item['minuman_id'],
                'harga' => $item['harga']
            ]);
        }
    }
}
