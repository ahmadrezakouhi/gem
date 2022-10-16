<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ybazli\Faker\Facades\Faker;

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
            'panel_code'=>Company::inRandomOrder()->first()->panel_code,
            'name' => Faker::firstName(),
            // 'email' => fake()->safeEmail(),
            // 'email_verified_at' => now(),
            'last_name'=>Faker::lastName(),
            'username'=>fake()->userName(),
            'national_code'=>Faker::melliCode(),
            'personal_code'=>fake()->numerify('#########'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'username_maha' =>fake()->userName(),
            'password_maha' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'address'=>Faker::address(),
            'description'=>Faker::paragraph(),
            'phone'=> fake()->phoneNumber(),
            'mobile' => Faker::mobile(),
            'role_code'=> $number = fake()->numberBetween(1,2),
            'role_title'=> ['admin','user'][--$number],
            'is_active'=>fake()->boolean(),
            'permissions'=>decbin(rand(2**52,1.8014e10)),
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
