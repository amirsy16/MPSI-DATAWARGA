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
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warga_id'); // Menghubungkan ke warga
            $table->enum('jenis_surat', ['Surat Keterangan Domisili', 'Surat Permohonan']);
            $table->text('keterangan')->nullable();
            $table->string('nomor_wa'); // Kolom nomor WA
            $table->string('email')->nullable(); // Kolom email
            $table->enum('status', ['menunggu', 'disetujui', 'ditolak'])->default('menunggu');
            $table->timestamps();
            
            // Relasi dengan data warga
            $table->foreign('warga_id')->references('id')->on('data_warga')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
