<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'nama' => 'WaterBased Pomade',
                'deskripsi' => 'Pomade dengan bahan dasar air untuk tampilan sleek.',
                'harga' => 30000,
                'gambar' => 'produk1.png'
            ],
            [
                'nama' => 'Hair Powder',
                'deskripsi' => 'Memberikan volume maksimal pada rambut.',
                'harga' => 85000,
                'gambar' => 'produk2.png'
            ],
            [
                'nama' => 'Matte Clay Pomade',
                'deskripsi' => 'Tampilan natural dengan daya tahan tinggi.',
                'harga' => 40000,
                'gambar' => 'produk3.png'
            ],
        ]);
    }
}
