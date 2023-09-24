<?php

namespace Database\Seeders;
use App\Models\Merchant;
use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        \Illuminate\Database\Eloquent\Factories\Factory::factoryForModel(User::class)->count(100)->create();

        // Create a specific user record with custom data
        User::create([
            'name' => "User OrderKing",
            'phone' => "+1100000000",
            'email' => "user@orderking.con",
            'password' => bcrypt('your_password'), // Replace 'your_password' with the desired password
            'merchant_id' => 1, // Provide an integer value for 'merchant_id'
        ]);
    }
}
