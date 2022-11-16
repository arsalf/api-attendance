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
        Schema::create('kelas', function (Blueprint $table) {
            $table->string('kode_kelas', 5)->autoIncrement(false)->primary();
            $table->string('nama_kelas');
            $table->string('prodi_kode', 5);
            $table->timestamps();

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
        Schema::dropIfExists('kelas');
        // drop foreign key
        Schema::table('kelas', function (Blueprint $table) {
            $table->dropForeign('kelas_prodi_kode_foreign');
        });
    }
};
