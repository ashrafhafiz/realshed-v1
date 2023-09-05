<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $first_name = fake()->firstName();
        $last_name = fake()->lastName();

        $name = $first_name . ' ' . $last_name;
        $username = substr($first_name, 0, 1) . '.' . $last_name;
        $email = $username . '@realshed.test';
        $imageWord = substr($first_name, 0, 1) . substr($last_name, 0, 1);

        return [
            'name' => $name,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'username' => $username,
            'phone' => fake()->phoneNumber(),
            'photo' => fake()->imageUrl(
                60,
                60,
                null,
                false,
                $imageWord,
                false,
                'png'
            ),
            'address' => fake()->address(),
            'role' => fake()->randomElement(['admin', 'agent', 'user']),
            'status' => fake()->randomElement(['active', 'inactive']),
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