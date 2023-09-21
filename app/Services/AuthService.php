<?php

namespace App\Services;

use App\Repositories\AuthRepository;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AuthService extends Service
{
    /**
     * Return Related Repository
     *
     * @return Repository;
     */
    public function repo(): Repository
    {
        $model = model(request()->segment(2));
        return new AuthRepository(new $model());
    }



    public function getCredintioal($data): Model
    {
        return tap($this->repo()->login($data));
    }
}
