<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateDataWargaTable extends Migration
{
    
    /**
     * Jalankan migrasi untuk membuat tabel 'data_warga'.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_warga', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 100);
            $table->char('nik', 16)->unique();
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('pekerjaan', 50);
            $table->enum('status_perkawinan', ['Belum Menikah', 'Menikah', 'Cerai']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('kontak', 15);
            $table->string('password')->nullable();
            $table->timestamps();  // Untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_warga');
    }
}
