<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mutasi;
use App\Models\User;
use App\Models\Barang;

class MutasiSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Fetch existing user and barang
        $user = User::where('email', 'admin@example.com')->first();
        $barang = Barang::where('kode', 'LAP001')->first();

        // Ensure user and barang exist before seeding
        if ($user && $barang) {
            Mutasi::create([
                'tanggal' => '2024-08-21',
                'jenis_mutasi' => 'Masuk',
                'jumlah' => 10,
                'user_id' => $user->id,
                'barang_id' => $barang->id,
            ]);

            Mutasi::create([
                'tanggal' => '2024-08-22',
                'jenis_mutasi' => 'Keluar',
                'jumlah' => 5,
                'user_id' => $user->id,
                'barang_id' => $barang->id,
            ]);
        }
    }
}
