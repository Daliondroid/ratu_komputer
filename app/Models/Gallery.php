<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Mendefinisikan Primary Key karena bukan 'id' default
    protected $primaryKey = 'id_gallery';

    protected $fillable = [
        'id_produk',
        'foto',
        'desk',
    ];

    /**
     * Relasi ke Model Produk
     * Gallery dimiliki oleh satu Produk.
     */
    public function produk()
    {
        // Parameter kedua 'id_produk' adalah Foreign Key di tabel galleries
        // Parameter ketiga 'id_produk' adalah Primary Key di tabel produks
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }
}