<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peserta>
 */
class PesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = fake()->randomElement(['male', 'female']);
        if($gender == 'male'){
            $jenis_kelamin = "Laki-Laki";
        } else {
            $jenis_kelamin = "Perempuan";
        }

        $kota = fake()->city();

        return [
            'nama' => fake()->name($gender),
            'alamat' => $kota,
            'jenis_kelamin' => $jenis_kelamin,
            'asal_sekolah' => "SMA ".fake()->randomDigitNot(0)." ".$kota, // password
            'kelas' => fake()->randomElement(['10', '11', '12'])
        ];
    }
}
