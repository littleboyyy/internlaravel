<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->randomNumber(7, false),
            'uuid' => $this->faker-> uuid(),
            'attachable_type'=> $this->faker->word(),
            'attachable_id' => $this->faker->numerify('###'),
            'file_path' => $this->faker->imageUrl(),
            //'file_name' => $this->faker->word(),
            'extension'=> $this->faker->word(),
            'mime_type'=> $this->faker->word(),
            'size' => $this->faker->randomDigit(20, false),
        ];
    }
}
