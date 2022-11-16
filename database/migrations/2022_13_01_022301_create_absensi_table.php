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
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->string('mahasiswa_nim', 9)->autoIncrement(false)->nullable();
            $table->id('jadwal_id')->autoIncrement(false)->nullable();
            $table->enum('status', ['hadir', 'izin', 'sakit', 'alpa']);
            $table->timestamps();

            $table->foreign('mahasiswa_nim')->references('nim')->on('mahasiswa');
            $table->foreign('jadwal_id')->references('id')->on('jadwal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
        // drop foreign key
        Schema::table('absensi', function (Blueprint $table) {
            $table->dropForeign('absensi_mahasiswa_nim_foreign');
            $table->dropForeign('absensi_jadwal_id_foreign');
        });
    }
};
