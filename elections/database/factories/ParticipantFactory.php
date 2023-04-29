<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(10),
            'num_cni' => $this->faker->randomNumber(9),
            'age' => $this->faker->randomNumber(21, 100),
            'id_region' => $this->faker->randomNumber(1, 20),
            'sexe' => Str::random(8),
            'statut' => $this->faker->monthName(),
            'id_vote' => 1,
            'login' => $this->faker->userName(),
            'password' => $this->faker->password(),
            'email' => $this->faker->unique()->safeEmail(),
            'etat' => Str::random(1),
            'telephone' => $this->faker->phoneNumber()
        ];
    }
}
