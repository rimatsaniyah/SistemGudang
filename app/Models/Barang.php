<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_barang',
        'kode',
        'kategori',
        'lokasi',
        // tambahkan atribut lain sesuai kebutuhan
    ];

    /**
     * Get all the mutasis for the barang.
     */
    public function mutasis()
    {
        return $this->hasMany(Mutasi::class);
    }
}
