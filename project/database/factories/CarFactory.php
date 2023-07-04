<?php

namespace Database\Factories;

use App\Models\CarBrand;
use App\Models\CarColors;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'car_brand_id' => CarBrand::factory(),
            'car_model_id' => CarModel::factory(),
            'year' => $this->faker->numberBetween(1900, 2023),
            'mileage' => $this->faker->randomNumber(),
            'car_color_id' => CarColors::factory()
        ];
    }
}
