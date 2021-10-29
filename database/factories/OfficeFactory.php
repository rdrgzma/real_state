<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Office::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
