<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     JurusanSeeder::class,
        //     ProdiSeeder::class,
        //     MataKuliahSeeder::class,
        // ]);
        // \App\Models\User::factory(10)->create();
        // \App\Models\Mahasiswa::factory(10)->create();
        // \App\Models\Dosen::factory(10)->create();
        // \App\Models\Kelas::factory(10)->create();
        $this->call([
            DosenMengajarSeeder::class,
        ]);
    }
}
