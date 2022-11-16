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
            // kode_kelas dengan format 3 huruf dan 2 angka
            'kode_kelas' => $this->faker->regexify('[A-Z]{3}[0-9]{2}'),
            'nama_kelas' => $this->faker->name,
            'prodi_kode' => $this->faker->randomElement([
                'TID3',
                'TID4',
                'TSD3',
                'TSD4',
                'TRTU3',
                'TRTU4'
            ]),
        ];
    }
}
