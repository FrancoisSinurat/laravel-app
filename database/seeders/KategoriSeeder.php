<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $kategoris = [
            ['nama' => 'Elektronik'],
            ['nama' => 'Pakaian'],
            ['nama' => 'Alat Tulis'],
            ['nama' => 'Otomotif'],
        ];

        // Menyimpan setiap kategori ke dalam database
        foreach ($kategoris as $kategori) {
            Kategori::create($kategori);
        }
    }
}
