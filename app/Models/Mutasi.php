<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tanggal',
        'jenis_mutasi',
        'jumlah',
        'user_id',   // foreign key for User
        'barang_id', // foreign key for Barang
    ];

    /**
     * Get the user that owns the mutasi.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the barang that owns the mutasi.
     */
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
