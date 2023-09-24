<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MerchantSeeder::class,
            UserSeeder::class,
        ]);

        Admin::create([
            'name' => "Admin OrderKing",
            'email' => "admin@orderking.con",
            'password' => bcrypt('password'), // Replace 'your_password' with the desired password
        ]);
    }
}
