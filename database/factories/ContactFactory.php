<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastname,
            'first_name' => $this->faker->firstname,
            'gender' =>$this->faker->numberBetween($min = 1, $max = 2),
            'email' =>$this->faker->email,
            'postcode' =>$this->faker->postcode,
            'address' =>$this->faker->address,
            'opinion' =>$this->faker->realText(50),
            'created_at' =>$this->faker->dateTimeThisMonth,
        ];
    }
}
