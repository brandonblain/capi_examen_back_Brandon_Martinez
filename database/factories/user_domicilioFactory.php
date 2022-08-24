<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class user_domicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
    	'user_id'=>User::inRandomOrder()->first()->id,
        'domicilio'=>$this->faker->sentence(2),
        'numero_exterior'=>$this->faker->numberBetween(0, 200),
        'colonia'=>$this->faker->word(),
        'cp'=>$this->faker->randomNumber(6, true),
        'ciudad'=>$this->faker->word()
        ];
    }
}
