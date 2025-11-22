<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins'; // Paksa nama tabel
    protected $primaryKey = 'id_admin'; // Primary key custom

    // PENTING: Matikan incrementing kalau id_admin bukan auto-increment standar
    // Tapi karena di migration lu pake (AI), ini biarin true (default)
    public $incrementing = true;

    protected $fillable = [
        'kode_admin',
        'kode_cabang', 
        'email', 
        'password', 
        'jk', 
        'jabatan', 
        'no_telfon', 
        'status', 
        'alamat', 
        'foto', 
        'id_cabang'
    ];

    protected $hidden = [
        'password',
    ];

    // --- INI BAGIAN PENTING BUAT NAMPOL ERRORNYA ---
    
    // 1. Paksa Laravel tau nama kolom ID buat Auth
    public function getAuthIdentifierName()
    {
        return 'id_admin'; 
    }

    // 2. Paksa Laravel tau kolom password
    public function getAuthPassword()
    {
        return $this->password;
    }

    // --- END ---

    public function cabang()
    {
        return $this->belongsTo(Cabang::class, 'id_cabang', 'id_cabang');
    }
}