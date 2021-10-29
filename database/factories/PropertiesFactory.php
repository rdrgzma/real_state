<?php

namespace Database\Factories;

use App\Models\Properties;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Properties::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'office_id' => \App\Models\Office::factory(),
            'realtor_id' => \App\Models\Realtor::factory(),
        ];
    }
}
