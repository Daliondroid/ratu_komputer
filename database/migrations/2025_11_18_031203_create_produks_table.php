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
        Schema::create('produks', function (Blueprint $table) {
            $table->id('id_produk');
            
            // Note: kode_produk TIDAK saya buat unique, 
            // karena barang sama di cabang beda akan punya kode sama tapi row berbeda.
            $table->string('kode_produk'); 
            
            $table->string('nama');
            $table->text('desk')->nullable();
            $table->decimal('harga', 15, 2); // Harga nempel di produk
            $table->integer('stok');         // Stok nempel di produk
            
            // FK Kategori
            $table->foreignId('id_kategori')
                ->constrained('kategoris', 'id_kategori');

            // FK Cabang (Produk ini milik cabang mana)
            $table->foreignId('id_cabang')
                ->constrained('cabangs', 'id_cabang')
                ->onDelete('cascade');
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
