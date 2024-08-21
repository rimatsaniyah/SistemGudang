<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Check if the barang already exists
        if (!Barang::where('kode', 'LAP001')->exists()) {
            Barang::create([
                'nama_barang' => 'Laptop',
                'kode' => 'LAP001',
                'kategori' => 'Elektronik',
                'lokasi' => 'Gudang A',
            ]);
        }

        // Add more items as needed
        if (!Barang::where('kode', 'TAB002')->exists()) {
            Barang::create([
                'nama_barang' => 'Tablet',
                'kode' => 'TAB002',
                'kategori' => 'Elektronik',
                'lokasi' => 'Gudang B',
            ]);
        }
    }
}
