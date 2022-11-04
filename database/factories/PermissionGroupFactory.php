<?php

namespace Database\Factories;
use App\Models\PermissionGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionGroupFactory extends Factory
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
            'name' =>$this->faker->unique()->word(),
        ];
    }
}
