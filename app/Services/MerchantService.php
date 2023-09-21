<?php

namespace App\Services;

use App\Repositories\AdvisorRepository;
use App\Repositories\Repository;

class AdvisorService extends Service
{
    /**
     * Return Related Repository
     *
     * @return Repository;
     */
    public function repo(): Repository
    {
        return new AdvisorRepository();
    }
}
