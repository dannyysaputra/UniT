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
        Schema::create('ukms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('deskripsi');
            $table->string('visi');
            $table->text('misi');
            $table->string('logo');
            $table->string('link_grup');
            $table->string('pengesahan');
            // $table->string('ava_pengurus_1');
            // $table->string('nama_pengurus_1');
            // $table->string('jabatan_pengurus_1');
            // $table->string('jurusan_pengurus_1');
            // $table->string('ava_pengurus_2');
            // $table->string('nama_pengurus_2');
            // $table->string('jabatan_pengurus_2');
            // $table->string('jurusan_pengurus_2');
            // $table->string('ava_pengurus_3');
            // $table->string('nama_pengurus_3');
            // $table->string('jabatan_pengurus_3');
            // $table->string('jurusan_pengurus_3');
            // $table->string('ava_pengurus_4');
            // $table->string('nama_pengurus_4');
            // $table->string('jabatan_pengurus_4');
            // $table->string('jurusan_pengurus_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukms');
    }
};
