<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "serial"=>Str::random(10),
            "status"=>$this->faker->randomElement(['pending' ,'successful', 'failed']),
            "user_id"=>User::all()->random()->id,
            "price"=>rand(10000,100000000),
        ];
    }
}
