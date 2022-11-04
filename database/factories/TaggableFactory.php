<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tag;
use App\Models\User;
class TaggableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id' => $this->faker->randomNumber(6, false),
            'taggable_type' => $this->faker->word(),
            'type' => $this->faker->randomDigit(),
            'tag_id'=>Tag::select('id')->first()->id,
            'taggable_id'=>User::select('id')->first()->id,

        ];
    }
}
