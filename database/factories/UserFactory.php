<?php

namespace Database\Factories;

use Faker\Provider\Address;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik' => '123123123',
            'no_kk' => '123123123',
            'nama_lengkap' => 'admin',
            'telepon' => '123',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'domisili' => 'Kabupaten Aceh Barat',
            'role' => 'admin'
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
