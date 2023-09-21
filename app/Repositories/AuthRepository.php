<?php

namespace App\Repositories;

use App\Models\Advisor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class AuthRepository extends Repository
{
    public function __construct(protected Model $type)
    {
    }

    /**
     * Return Related Model
     *
     * @return Model;
     */
    public function model(): Model
    {
        return new $this->type();
    }

    public function login($data)
    {
        Auth::guard($this->model())->attempt($data);
    }
}
