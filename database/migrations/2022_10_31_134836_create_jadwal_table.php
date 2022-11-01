<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jadwal');
            $table->string('jurusan_id')->nullable();
            $table->id('mahasiswa_id')->autoIncrement(false)->nullable();
            $table->id('dosen_id')->autoIncrement(false)->nullable();
            $table->string('prodi_kode', 5)->nullable();
            $table->date('tanggal_mulai')->autoIncrement(false)->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->timestamps();

            $table->foreign('jurusan_id')->references('kode_jurusan')->on('jurusan');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->foreign('dosen_id')->references('id')->on('dosen');
            $table->foreign('prodi_kode')->references('kode_prodi')->on('prodi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
};
