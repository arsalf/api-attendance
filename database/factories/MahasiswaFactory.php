<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nim' => $this->faker->unique()->randomNumber(8),
            'nama_mahasiswa' => $this->faker->name,
            // ambil kelas kode dari factory kelasFactory
            'kelas_kode' => KelasFactory::new()->create()->kode_kelas,
        ];
    }
}
