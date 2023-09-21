<?php

namespace App\Repositories;

use App\Models\Admin;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends Repository
{
    public function model(): Model
    {
        return new Admin();
    }

    public function bundles($userId)
    {
        return $this->show($userId)->bundles()->get()->filter(function ($bundle) use ($userId) {
            return $bundle->bundle_user->user_id == $userId;
        });
    }

    public function addresses($userId)
    {
        return $this->show($userId)->addresses;
    }


    public function find($conditions)
    {
        return $this->model()->where($conditions)->first();
    }

    public function createToken($id)
    {
        $user= $this->model()->find($id)->createToken('your token')->plainTextToken;
        return $user;
    }

    public function searchBy($conditions): Collection
    {
        $query = $this->model();

        foreach ($conditions as $condition) {
            $query = $query->orWhere([$condition]);
        }

        return $query->limit(config('resource.default_pages_count'))->get();
    }
}
