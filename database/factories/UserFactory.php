<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'national_code' => $this->faker->buildingNumber(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'postal_code' => $this->faker->postcode(),
            'mobile' => $this->faker->unique->regexify('09[0-9]{9}'),
            'email' => $this->faker->unique->safeEmail(),
            'wallet' => $this->faker->numberBetween(0,5000000),
            'status' => 'active',
            'password' => Hash::make($this->faker->password(8,10)), // password

            ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
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
