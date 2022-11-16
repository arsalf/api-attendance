<?php

use Brick\Math\BigInteger;
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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim', 9)->autoIncrement(false)->primary();
            $table->string('nama_mahasiswa');
            $table->string('kelas_kode', 5)->nullable();
            $table->timestamps();
            $table->foreign('kelas_kode')->references('kode_kelas')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
        // drop foreign key
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropForeign('mahasiswa_kelas_kode_foreign');
        });
    }
};
