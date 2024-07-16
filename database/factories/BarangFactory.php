<?php

namespace Database\Factories;

use App\Models\Kategori;
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
            'kategori_id' => Kategori::all()->random()->id,
            'jenis' => fake()->sentence(1),
            'harga' => fake()->numerify(random_int(1000,10000)),
        ];
    }
}
