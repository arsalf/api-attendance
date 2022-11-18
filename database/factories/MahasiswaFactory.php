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
            'kelas_kode' =>  $this->faker->randomElement([
                'KL001', 'KL002', 'KL003', 'KL004', 'KL005', 'KL006'
            ]),
        ];
    }
}
