<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // get data kelas
        $kelas = \App\Models\Kelas::all();
        $data = [
            [
                'dosen_mengajar_id' => 1,
                'kode_jadwal' => 'JD001',
                'kelas_kode' => $kelas[0]->kode_kelas,
                'mata_kuliah_kode' => 'MK001',
                'semester' => '1',
                'tanggal' => '2021-11-01',
                'jam_mulai' => '07:00:00',
                'jam_selesai' => '09:00:00',
            ],
            [
                'dosen_mengajar_id' => 2,
                'kode_jadwal' => 'JD002',
                'kelas_kode' => 'AKA03',
                'mata_kuliah_kode' => 'MK002',
                'tanggal' => '2021-11-01',
                'jam_mulai' => '07:00:00',
                'jam_selesai' => '09:00:00',
                'semester' => '1',
            ],
            [
                'dosen_mengajar_id' => 3,
                'kode_jadwal' => 'JD003',
                'kelas_kode' => 'AKA03',
                'mata_kuliah_kode' => 'MK003',
                'tanggal' => '2021-11-01',
                'jam_mulai' => '07:00:00',
                'jam_selesai' => '09:00:00',
                'semester' => '1',
            ],
            [
                'dosen_mengajar_id' => 4,
                'kode_jadwal' => 'JD004',
                'kelas_kode' => 'AKA03',
                'mata_kuliah_kode' => 'MK004',
                'tanggal' => '2021-11-01',
                'jam_mulai' => '07:00:00',
                'jam_selesai' => '09:00:00',
                'semester' => '1',
            ],
            [
                'dosen_mengajar_id' => 5,
                'kode_jadwal' => 'JD005',
                'kelas_kode' => 'AKA03',
                'mata_kuliah_kode' => 'MK005',
                'tanggal' => '2021-11-01',
                'jam_mulai' => '07:00:00',
                'jam_selesai' => '09:00:00',
                'semester' => '1',
            ],
            [
                'dosen_mengajar_id' => 6,
                'kode_jadwal' => 'JD006',
                'kelas_kode' => 'AKA03',
                'mata_kuliah_kode' => 'MK006',
                'tanggal' => '2021-11-01',
                'jam_mulai' => '07:00:00',
                'jam_selesai' => '09:00:00',
                'semester' => '1',
            ],
            [
                'dosen_mengajar_id' => 7,
                'kode_jadwal' => 'JD007',
                'kelas_kode' => 'AKA03',
                'mata_kuliah_kode' => 'MK007',
                'tanggal' => '2021-11-01',
                'jam_mulai' => '07:00:00',
                'jam_selesai' => '09:00:00',
                'semester' => '1',
            ],
        ];

        \App\Models\Jadwal::insert($data);
    }
}
