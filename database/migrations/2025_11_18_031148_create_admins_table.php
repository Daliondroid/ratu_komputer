<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('kode_admin')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('jk'); 
            $table->string('jabatan'); 
            $table->string('no_telfon');
            $table->string('status'); 
            $table->text('alamat');
            $table->string('foto')->nullable();
            
            // Relasi ke Cabang (Admin ini kerja di cabang mana?)
            $table->foreignId('id_cabang')->nullable()
                ->constrained('cabangs', 'id_cabang')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
