<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenMengajarSeeder extends Seeder
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
                'dosen_id' => 1,
                'mata_kuliah_kode' => 'MK001',
            ],
            [
                'dosen_id' => 2,
                'mata_kuliah_kode' => 'MK002',
            ],
            [
                'dosen_id' => 3,
                'mata_kuliah_kode' => 'MK003',
            ],
            [
                'dosen_id' => 4,
                'mata_kuliah_kode' => 'MK004',
            ],
            [
                'dosen_id' => 5,
                'mata_kuliah_kode' => 'MK005',
            ],
            [
                'dosen_id' => 6,
                'mata_kuliah_kode' => 'MK006',
            ],
            [
                'dosen_id' => 7,
                'mata_kuliah_kode' => 'MK007',
            ],
            [
                'dosen_id' => 8,
                'mata_kuliah_kode' => 'MK008',
            ],
            [
                'dosen_id' => 9,
                'mata_kuliah_kode' => 'MK009',
            ],
            [
                'dosen_id' => 10,
                'mata_kuliah_kode' => 'MK010',
            ],
            [
                'dosen_id' => 11,
                'mata_kuliah_kode' => 'MK011',
            ],
            [
                'dosen_id' => 12,
                'mata_kuliah_kode' => 'MK012',
            ],
            [
                'dosen_id' => 13,
                'mata_kuliah_kode' => 'MK013',
            ],
            [
                'dosen_id' => 14,
                'mata_kuliah_kode' => 'MK014',
            ],
            [
                'dosen_id' => 15,
                'mata_kuliah_kode' => 'MK015',
            ],
            [
                'dosen_id' => 16,
                'mata_kuliah_kode' => 'MK016',
            ],
            [
                'dosen_id' => 17,
                'mata_kuliah_kode' => 'MK017',
            ],
            [
                'dosen_id' => 18,
                'mata_kuliah_kode' => 'MK018',
            ],
            [
                'dosen_id' => 19,
                'mata_kuliah_kode' => 'MK019',
            ],
            [
                'dosen_id' => 20,
                'mata_kuliah_kode' => 'MK020',
            ]
        ];

        \App\Models\DosenMengajar::insert($data);
    }
}
