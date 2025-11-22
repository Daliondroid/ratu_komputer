<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakitPc extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_rakitan';

    protected $fillable = [
        'kode_rakitan',
        'prosessor',
        'motherboard',
        'ram',
        'casing',
        'ssd',
        'hdd',
        'vga',
        'psu',
        'mouse',
        'keyboard',
        'monitor',
        'coolerfan',
    ];
    
    // Jika nanti ingin menambahkan relasi (misal rakitan ini milik siapa), 
    // bisa ditambahkan function di sini. 
    // Tapi berdasarkan CSV saat ini, model ini berdiri sendiri (menyimpan string nama komponen).
}
