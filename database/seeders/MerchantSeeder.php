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
        $sequence = 0;
        \Illuminate\Database\Eloquent\Factories\Factory::factoryForModel(Merchant::class)->count(6)->create([
            'subdomain' => function () use (&$sequence) {
                $sequence++;
                return 'app' . $sequence;
            },
        ]);

    }
}
