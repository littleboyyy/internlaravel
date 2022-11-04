<?php

namespace Database\Factories;
use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->randomNumber(6, false),
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'username' => $this->faker->userName(),
            'password'=> $this->faker->password(),
            'school_id'=>School::first()->id,
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'type' => $this->faker->randomDigit(),
            'parent_id' => $this->faker->randomNumber(4, false),
            'verified_at' => now(),
            'closed' => false,
            'code' => $this->faker->randomNumber(5, false),
            'social_type' => $this->faker->randomDigit(),
            'social_id' => $this->faker->unique()->numerify('############'),
            'social_name' => $this->faker->name(),
            'social_nickname' => $this->faker->word(),
            'social_avatar' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    /*
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
    */
}
