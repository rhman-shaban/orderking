<?php

namespace Database\Factories;

use App\Models\Merchant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MerchantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Merchant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>  fake()->name(),
            'shop_name' => fake()->company(),
            'phone' => fake()->phoneNumber(),
            'email' =>fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'password' => bcrypt('password'),
        ];
    }
}
