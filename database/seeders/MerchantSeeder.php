<?php

namespace Database\Seeders;
use App\Models\Merchant;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        \Illuminate\Database\Eloquent\Factories\Factory::factoryForModel(Merchant::class)->count(10)->create();

        Merchant::create([
            'name' =>"Merchant OrderKing",
            'phone' =>"+1100000000",
            'email' =>"merchant@orderking.con",
            'shop_name' =>"OrderKing Shop",
            'password' =>"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
        ]);
    }
}
