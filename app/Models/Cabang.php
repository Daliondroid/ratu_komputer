<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $primaryKey = 'id_cabang';
    
    protected $fillable = [
        'kode_cabang',
        'alamat',
        'desk',
    ];

    // Relasi: Cabang punya banyak produk (lewat tabel pivot)
    public function produks()   
    {
        return $this->belongsToMany(Produk::class, 'cabang_produk', 'id_cabang', 'id_produk')
                    ->withPivot('harga', 'stok')
                    ->withTimestamps();
    }

    // CONTOH BENAR
    public function admins() {
        return $this->hasMany(Admin::class, 'id_cabang', 'id_cabang');
    }
}
