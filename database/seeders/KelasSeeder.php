<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_kelas' => 'KL001',
                'nama_kelas' => '1A',
                'prodi_kode' => 'TID3',
            ],
            [
                'kode_kelas' => 'KL002',
                'nama_kelas' => '1B',
                'prodi_kode' => 'TID4',
            ],
            [
                'kode_kelas' => 'KL003',
                'nama_kelas' => '2A',
                'prodi_kode' => 'TRTU3',
            ],
            [
                'kode_kelas' => 'KL004',
                'nama_kelas' => '2B',
                'prodi_kode' => 'TRTU4',
            ],
            [
                'kode_kelas' => 'KL005',
                'nama_kelas' => '3A',
                'prodi_kode' => 'TSD3',
            ],
            [
                'kode_kelas' => 'KL006',
                'nama_kelas' => '3B',
                'prodi_kode' => 'TSD4',
            ],

        ];
        \App\Models\Kelas::insert($data);
    }
}
