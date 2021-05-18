<?php

namespace Database\Factories;

use App\Models\cake;
use Illuminate\Database\Eloquent\Factories\Factory;

class CakeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cake::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_name'           => $this->faker->word,
            'client_direction'      => $this->faker->streetAddress,
            'ingredient'            => $this->faker->word,
            'taste'                 => $this->faker->word,
            'quantity'              => $this->faker->randomDigitNot(0, 7, 8, 9),
            'size'                  => $this->faker->word,
            'description'           => $this->faker->text($maxNbChars = 100),
            'comment'               => $this->faker->text($maxNbChars = 100),
            'available'             => $this->faker->randomDigitNot(2, 3, 4, 5, 6, 7, 8, 9),
        ];
    }
}
