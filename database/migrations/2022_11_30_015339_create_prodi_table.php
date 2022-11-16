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
        Schema::create('prodi', function (Blueprint $table) {
            $table->string('kode_prodi', 5)->autoIncrement(false)->unique();
            $table->string('nama_prodi');
            $table->string('jurusan_kode', 5)->nullable();
            $table->foreign('jurusan_kode')->references('kode_jurusan')->on('jurusan');

            $table->primary('kode_prodi');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodi');
        // drop foreign key
        Schema::table('prodi', function (Blueprint $table) {
            $table->dropForeign('prodi_jurusan_kode_foreign');
        });
    }
};
