<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName($gender = null|'male'|'female'),
            'surname' => $this->faker->lastName,
            'phone' => $this->faker->numerify('##########'),
            'is_infected' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'location' => $this->faker->city,
            'birth' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'last_login' => $this->faker->dateTime($max = 'now', $timezone = null),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
        ];
    }
}
