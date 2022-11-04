<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class MessageFactory extends Factory
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
            'room' =>$this->faker->word(),
            'sender_type' => 'user',
            'sender_id' => User::select('id')->first()->id,
            'receiver_id' => 1,
            'receiver_type' => 'user',
            'content' => $this->faker->sentence(),
            'content_type' => $this->faker->text(),
            'association_id' => $this->faker->numerify('###'),
            'association_type' => $this->faker->word(),

        ];
    }
}
