<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

<<<<<<< HEAD
=======
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
<<<<<<< HEAD
     * @return array
=======
     * @return array<string, mixed>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
=======
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
=======
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    }
}
