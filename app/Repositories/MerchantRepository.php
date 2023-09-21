<?php

namespace App\Repositories;

use App\Models\Merchant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class MerchantRepository extends Repository
{
    /**
     * Return Related Model
     *
     * @return Model;
     */
    public function model(): Model
    {
        return new Merchant();
    }
}
