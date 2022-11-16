<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodi = [
            [
                'kode_prodi' => 'TID3',
                'nama_prodi' => 'D3 Teknik Informatika',
                'jurusan_kode' => 'JTK',
            ],
            [
                'kode_prodi' => 'TID4',
                'nama_prodi' => 'D4 Teknik Informatika',
                'jurusan_kode' => 'JTK',
            ],
            [
                'kode_prodi' => 'TSD3',
                'nama_prodi' => 'D3 Teknik Sipil',
                'jurusan_kode' => 'JTS',
            ],
            [
                'kode_prodi' => 'TSD4',
                'nama_prodi' => 'D4 Teknik Sipil',
                'jurusan_kode' => 'JTS',
            ],
            [
                'kode_prodi' => 'TRTU3',
                'nama_prodi' => 'D3 Teknik Refrigerasi dan Tata Udara',
                'jurusan_kode' => 'JTRTU',
            ],
            [
                'kode_prodi' => 'TRTU4',
                'nama_prodi' => 'D4 Teknik Refrigerasi dan Tata Udara',
                'jurusan_kode' => 'JTRTU',
            ],
        ];

        foreach ($prodi as $data) {
            \App\Models\Prodi::create($data);
        }
    }
}
