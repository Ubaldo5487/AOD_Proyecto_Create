<?php

namespace Database\Factories;

use App\Models\Mascota;
use Illuminate\Database\Eloquent\Factories\Factory;

class MascotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mascota::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'species'           => $this ->faker->word,
            'name'              => $this ->faker->word,
            'race'              => $this ->faker->word,
            'age'               => $this ->faker->randomDigit,
            'color'             => $this ->faker->colorName,
            'size'              => $this ->faker->word,

        ];
    }
}
