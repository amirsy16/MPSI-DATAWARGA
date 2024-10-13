<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('konten');
            $table->string('foto')->nullable(); // untuk menyimpan path gambar
             $table->date('tanggal'); // u
            $table->timestamps();

            
        });
    }

    public function down()
    {
        Schema::dropIfExists('berita');
        Schema::dropIfExists('beritas');
    }
}
