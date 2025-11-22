<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $primaryKey = 'id_produk';
    
    protected $fillable = [
        'kode_produk', 'nama', 'desk', 'harga', 'stok', 
        'id_kategori', 'id_cabang'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function cabang()
    {
        return $this->belongsTo(Cabang::class, 'id_cabang');
    }
    
    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'id_produk');
    }
}
