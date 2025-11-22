<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Cabang;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Data Cabang Dulu (Karena Admin butuh id_cabang)
        $cabang1 = Cabang::create([
            'kode_cabang' => 'S01',
            'alamat' => 'Jalan raya Serang',
            'desk' => 'Cabang Ke-1'
        ]);

        // 2. Buat Akun STAFF (Sesuai Excel: Deannejad)
        Admin::create([
            'kode_admin' => 'AD001',
            'email' => 'Deannejad@gmail.com',
            'password' => Hash::make('tamuvip123'), // Password WAJIB di-Hash
            'jk' => 'Laki',
            'jabatan' => 'Staff',
            'no_telfon' => '0823123512',
            'status' => 'Aktif',
            'alamat' => 'Jalan Ali',
            'id_cabang' => $cabang1->id_cabang, // Masuk ke Cabang 1
        ]);

        // 3. Buat Akun OWNER/SUPERADMIN (Sesuai Excel: Queencomp)
        Admin::create([
            'kode_admin' => 'SD001',
            'email' => 'Queencomp@outlook.com',
            'password' => Hash::make('orangpenting23'), 
            'jk' => 'Laki',
            'jabatan' => 'SuperAdmin', // Sesuai middleware role
            'no_telfon' => '0823123512',
            'status' => 'Aktif',
            'alamat' => 'Serang, Banten',
            'id_cabang' => null, // Owner tidak terikat cabang
        ]);
    }
}