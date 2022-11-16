<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // tambahkan data jurusan statis
        $jurusan = [
            [
                'kode_jurusan' => 'JTK',
                'nama_jurusan' => 'Jurusan Teknik Komputer dan Informatika',
            ],
            [
                'kode_jurusan' => 'JTI',
                'nama_jurusan' => 'Jurusan Teknik Industri',
            ],
            [
                'kode_jurusan' => 'JTE',
                'nama_jurusan' => 'Jurusan Teknik Elektro',
            ],
            [
                'kode_jurusan' => 'JTM',
                'nama_jurusan' => 'Jurusan Teknik Mesin',
            ],
            [
                'kode_jurusan' => 'JTP',
                'nama_jurusan' => 'Jurusan Teknik Pangan',
            ],
            [
                'kode_jurusan' => 'JTS',
                'nama_jurusan' => 'Jurusan Teknik Sipil',
            ],
            [
                'kode_jurusan' => 'JTRTU',
                'nama_jurusan' => 'Jurusan Teknik Refrigerasi dan Tata Udara',
            ],
        ];


        foreach ($jurusan as $data) {
            \App\Models\Jurusan::create($data);
        }
    }
}
