<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PermissionGroup;
class PermissionFactory extends Factory
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
            'name' => $this->faker->unique()->word(),
            'key' => $this->faker->unique()->word(),
            'permission_group_id'=>PermissionGroup::first()->id,
        ];
    }
}
