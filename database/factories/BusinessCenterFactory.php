<?php

namespace Database\Factories;

use App\Models\BusinessCenter;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessCenterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BusinessCenter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam non, nesciunt quod ea in, adipisci temporibusitaque suscipit deserunt quasi repellendus facilis. Numquam, sequi! Sint, adipisci?'
        ];
    }
}
