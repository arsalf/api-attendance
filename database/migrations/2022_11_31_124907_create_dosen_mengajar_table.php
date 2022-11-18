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
        Schema::create('dosen_mengajar', function (Blueprint $table) {
            $table->id();
            $table->id('dosen_id')->autoIncrement(false);
            $table->string('mata_kuliah_kode', 5)->autoIncrement(false);
            $table->enum('jenis_mata_kuliah', ['Teori', 'Praktikum']);
            $table->timestamps();
            $table->foreign('dosen_id')->references('id')->on('dosen');
            $table->foreign('mata_kuliah_kode')->references('kode_mata_kuliah')->on('mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen_mengajar');
        // drop foreign key
        Schema::table('dosen_mengajar', function (Blueprint $table) {
            $table->dropForeign('dosen_mengajar_dosen_id_foreign');
            $table->dropForeign('dosen_mengajar_mata_kuliah_kode_foreign');
        });
    }
};
