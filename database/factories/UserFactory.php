<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Merchant; // Import the Merchant model
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        // Get all merchant IDs from the database
        $merchantIds = Merchant::pluck('id')->toArray();

        return [
            'name' =>  fake()->name(),
            'phone' => fake()->phoneNumber(),
            'email' =>fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), 
            'remember_token' => Str::random(10),
            'merchant_id' =>fake()->randomElement($merchantIds), // Assign a random merchant_id
        ];
    }
}

