<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kelas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_kelas' => 'KL001',
            'nama_kelas' => $this->faker->randomElement([
                '1A', '1B', '2A', '2B', '3A', '3B', '4A', '4B', '5A', '5B', '6A', '6B'
            ]),
            'prodi_kode' => $this->faker->randomElement([
                'TID3', 'TID4', 'TSD3', 'TSD4', 'TRTU3', 'TRTU4'
            ]),
        ];
    }
}
