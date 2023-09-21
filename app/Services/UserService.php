<?php

namespace App\Services;

use App\Repositories\Repository;
use App\Repositories\UserRepository;

class UserService extends Service
{
    /**
     * Return Related Repository
     *
     * @return Repository;
     */
    public function repo(): Repository
    {
        return new UserRepository();
    }
}
