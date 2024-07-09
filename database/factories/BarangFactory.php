<?php

namespace Database\Factories;

use Brick\Math\BigInteger;
use DateTime;
use Faker\Provider\en_US\Text;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Number;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    // protected static ?int $id;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() :array
    {
        return [
            'nama' => fake()->name(),
            'kategori' => fake()->sentence(1),
            'jenis' => fake()->sentence(1),
            'harga' => fake()->numerify(random_int(1000,10000)),
        ];
    }
}
