<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class settingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'return_days' => 20,
            'fine' => 5
        ];
    }
}
