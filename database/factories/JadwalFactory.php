<?php

namespace Database\Factories;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jadwal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dosen_mengajar_id' => $this->faker->numberBetween(1, 20),
            'kode_jadwal' => $this->faker->regexify('[A-Z]{3}[0-9]{2}'), // TID301
            'kelas_kode' =>  $this->faker->randomElement([
                'KL001', 'KL002', 'KL003', 'KL004', 'KL005', 'KL006'
            ]),
            'mata_kuliah_kode' => $this->faker->randomElement([
                'MK001', 'MK002', 'MK003', 'MK004', 'MK005', 'MK006', 'MK007', 'MK008', 'MK009', 'MK010', 'MK011', 'MK012', 'MK013', 'MK014', 'MK015', 'MK016', 'MK017', 'MK018', 'MK019', 'MK020'
            ]),
            'semester' => 1,
            'tanggal' => $this->faker->dateTimeBetween('-3 days', 'now'),
            'jam_mulai' => $this->faker->dateTimeBetween('-3 days', 'now')->format('H:i:s'),
            'jam_selesai' => $this->faker->dateTimeBetween('-3 days', 'now')->format('H:i:s'),
        ];
    }
}
