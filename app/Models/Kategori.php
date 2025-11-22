<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $primaryKey = 'id_kategori'; // Karena nama kolom bukan 'id'
    
    protected $fillable = [
        'nama',
        'icon',
    ];

    // Relasi: Satu kategori punya banyak produk
    public function produks()
    {
        return $this->hasMany(Produk::class, 'id_kategori');
    }
}
