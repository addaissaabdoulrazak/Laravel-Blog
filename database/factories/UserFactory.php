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
    public function definition()
    {
      
        return [
            'prenom' => $this->faker->name(),
            'nom' => $this->faker->name(),
            // 'role' => $this->faker->default('client')->name(),
            'telephone' => $this->faker->name(),
            'pays' => $this->faker->name(),
            'adresse' => $this->faker->name(),
            'ville' => $this->faker->name(),
            'code_postale' => $this->faker->name(),
        
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
