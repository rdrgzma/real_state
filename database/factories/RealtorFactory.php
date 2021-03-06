<?php

namespace Database\Factories;

use App\Models\Realtor;
use Illuminate\Database\Eloquent\Factories\Factory;

class RealtorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Realtor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'office_id' => 1,
            'user_id' => 1,
        ];
    }
}
