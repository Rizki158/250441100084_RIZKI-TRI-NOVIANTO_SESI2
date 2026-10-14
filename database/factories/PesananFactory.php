<?php

namespace Database\Factories;

use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pesanan>
 */
class PesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'menu_id'=> Menu::inRadomOrder()->first()->id?? Menu::factory();
            'nama_pelanggan'=>fake();
            'nomor_meja'=>fake();
            'jumlah'=>fake();
            'total_harga'=>fake();
            'status'=>fake();
        ];
    }
}
