<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mataKuliah = [
            [
                'kode_mata_kuliah' => 'MK001',
                'nama_mata_kuliah' => 'Pemrograman Web',
            ],
            [
                'kode_mata_kuliah' => 'MK002',
                'nama_mata_kuliah' => 'Pemrograman Mobile',
            ],
            [
                'kode_mata_kuliah' => 'MK003',
                'nama_mata_kuliah' => 'Pemrograman Desktop',
            ],
            [
                'kode_mata_kuliah' => 'MK004',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Framework',
            ],
            [
                'kode_mata_kuliah' => 'MK005',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Komponen',
            ],
            [
                'kode_mata_kuliah' => 'MK006',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Objek',
            ],
            [
                'kode_mata_kuliah' => 'MK007',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Event',
            ],
            [
                'kode_mata_kuliah' => 'MK008',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Web Service',
            ],
            [
                'kode_mata_kuliah' => 'MK009',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Microservice',
            ],
            [
                'kode_mata_kuliah' => 'MK010',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Cloud',
            ],
            [
                'kode_mata_kuliah' => 'MK011',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Internet of Things',
            ],
            [
                'kode_mata_kuliah' => 'MK012',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Blockchain',
            ],
            [
                'kode_mata_kuliah' => 'MK013',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Artificial Intelligence',
            ],
            [
                'kode_mata_kuliah' => 'MK014',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Machine Learning',
            ],
            [
                'kode_mata_kuliah' => 'MK015',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Data Science',
            ],
            [
                'kode_mata_kuliah' => 'MK016',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Big Data',
            ],
            [
                'kode_mata_kuliah' => 'MK017',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Internet',
            ],
            [
                'kode_mata_kuliah' => 'MK018',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Jaringan',
            ],
            [
                'kode_mata_kuliah' => 'MK019',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Sistem Operasi',
            ],
            [
                'kode_mata_kuliah' => 'MK020',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Database',
            ],
            [
                'kode_mata_kuliah' => 'MK021',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Multimedia',
            ],
            [
                'kode_mata_kuliah' => 'MK022',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Game',
            ],
            [
                'kode_mata_kuliah' => 'MK023',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Desktop',
            ],
            [
                'kode_mata_kuliah' => 'MK024',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Mobile',
            ],
            [
                'kode_mata_kuliah' => 'MK025',
                'nama_mata_kuliah' => 'Pemrograman Berbasis Web',
            ]
        ];

        // insert batch
        MataKuliah::insert($mataKuliah);
    }
}
