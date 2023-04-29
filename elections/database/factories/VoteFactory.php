<?php

namespace Database\Factories;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\DateFactory;

class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'date' => $this->faker->dateTimeBetween('-5 years', 'now')
        ];
    }
}
