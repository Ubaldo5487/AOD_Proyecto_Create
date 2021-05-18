<?php

namespace Database\Factories;

use App\Models\Cellphone;
use Illuminate\Database\Eloquent\Factories\Factory;

class CellphoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cellphone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand'                 => $this->faker->word,
            'model'                 => $this->faker->swiftBicNumber,
            'color'                 => $this->faker->colorName,
            'camNumber'             => $this->faker->randomDigitNot(0, 5, 6, 7, 8, 9),
            'rearCamera_px'         => $this->faker->randomNumber($nbDigits = 2, $strict = false),
            'frontalCamera_px'      => $this->faker->randomNumber($nbDigits = 2, $strict = false),
            'screenSize'            => $this->faker->word,
            'screenResolution'      => $this->faker->word,
            'memory'                => $this->faker->randomDigit,
            'ram'                   => $this->faker->randomNumber($nbDigits = 2, $strict = false),
            'typeOfSystem'          => $this->faker->word,
            'systemVersion'         => $this->faker->word,
            'batteryCapacity'       => $this->faker->numberBetween($min = 3000, $max = 5500),
            'loadingspeed'          => $this->faker->numberBetween($min = 12, $max = 20),
            'description'           => $this->faker->text($maxNbChars = 100),
            'comment'               => $this->faker->text($maxNbChars = 100),
            'available'             => $this->faker->randomDigitNot(2, 3, 4, 5, 6, 7, 8, 9),
        ];
    }
}
