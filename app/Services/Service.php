<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

abstract class Service
{
    abstract public function repo();

    /**
     * @param $data
     * @return Model
     */
    public function makeNewResource($data): Model
    {
        return $this->repo()->create($data);
    }

    /**
     * @param array $with
     * @param bool $paginate
     * @return Collection|LengthAwarePaginator
     */
    public function retrieveResources(array $with = [], bool $paginate = true): Collection|LengthAwarePaginator
    {
        return $this->repo()->retrieve($with, $paginate);
    }

    /**
     * @param $id
     * @return Model
     */
    public function retrieveSingleResource($id): Model
    {
        return $this->repo()->show($id);
    }

    /**
     * @param $conditions
     * @return Model
     */
    public function retrieveBy($conditions): Model
    {
        return $this->repo()->findWhere($conditions);
    }


    /**
     * @param $attribute
     * @param $array
     * @return Collection
     */
    public function retrieveIn($attribute, $array): Collection
    {
        return $this->repo()->findIn($attribute, $array);
    }

    /**
     * @param $id
     * @param $data
     * @return Model
     */
    public function updateResource($id, $data): Model
    {
        return $this->repo()->update($id, $data);
    }

    /**
     * @param $id
     * @return bool
     */
    public function deleteResource($id): bool
    {
        return $this->repo()->delete($id);
    }

    /**
     * @param $conditions
     * @return Collection
     */
    public function searchBy($conditions): Collection
    {
        return $this->repo()->searchBy($conditions);
    }
}
