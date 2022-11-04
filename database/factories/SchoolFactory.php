<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'id' => $this-> faker->randomNumber(6, false),
            'name' => $this->faker->unique()->name(),
            'email' => $this->faker->unique()->safeEmail(),
            //'code' => $this->faker->unique()->word(),
            'address' => $this->faker->unique()->sentence(),
            'type' => $this->faker->randomNumber(5, false),
            'phone' => $this->faker->phoneNumber(),
            'hotline' => $this->faker->phoneNumber(),
            'province_code' => $this->faker->randomNumber(4, true),
            'institution_code' => $this->faker->randomNumber(4, true),
            'main_branch' => $this->faker->randomDigit(),
            'zip_code' => $this->faker->randomNumber(6, true),
            'attribute_infomation_setting_date' => now(),
            'old_school_investigation_number' => $this->faker->phoneNumber(),
            'facebook_url' => $this->faker->url(),
            'twitter_url' => $this->faker->url(),
            'youtube_url' => $this->faker->url(),
            'fax_number' => $this->faker->phoneNumber(),
            
        ];
    }
}
