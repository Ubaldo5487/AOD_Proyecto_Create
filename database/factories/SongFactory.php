<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Song::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'             => $this->faker->word,
            'album'             => $this->faker->word,
            'autor'             => $this->faker->word,
            'genere'            => $this->faker->word,
            'duration'          => $this->faker->word,
            'date'              => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'available'         => $this->faker->randomDigitNot(2, 3, 4, 5, 6, 7, 8, 9),
        ];
    }
}
