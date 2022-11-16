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
            $table->id('dosen_mengajar_id')->autoIncrement(false)->nullable();
            $table->string('kode_jadwal', 5)->nullable();
            $table->string('kelas_kode', 5)->autoIncrement(false)->nullable();
            $table->date('tanggal');
            $table->time('jam_mulai')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->timestamps();

            $table->foreign('kelas_kode')->references('kode_kelas')->on('kelas');
            $table->foreign('dosen_mengajar_id')->references('id')->on('dosen_mengajar');
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
        // drop foreign key
        Schema::table('jadwal', function (Blueprint $table) {
            $table->dropForeign('jadwal_kelas_kode_foreign');
            $table->dropForeign('jadwal_dosen_mengajar_id_foreign');
        });
    }
};
