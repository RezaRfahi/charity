<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;
use Nette\Utils\Random;

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
            "serial"=>"000000000000000000000000000000".Random::generate(6,'0-9'),
            "status"=>$this->faker->randomElement(['pending' ,'successful', 'failed']),
            "user_id"=>User::all()->random()->id,
            "price"=>rand(10000,1000000),
        ];
    }
}
