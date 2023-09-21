<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

abstract class Repository
{
    abstract public function model(); 

    /**
     * @param $data
     * @return Model
     */
    public function create($data): Model
    {
        return $this->model()->create($data);
    }

    /**
     * @param array $with
     * @param bool $paginate
     * @return Collection|LengthAwarePaginator
     */
    public function retrieve(array $with = [], bool $paginate = true): Collection|LengthAwarePaginator
    {
        $model = $this->model()->with($with);
        if ($paginate) {
            return $model->paginate(15);
        }

        return $model->get();
    }

    /**
     * @param $id
     * @param array $with
     * @return Model
     */
    public function show($id, array $with = []): ?Model
    {
        return $this->model()->with($with)->find($id);
    }

    /**
     * @param $conditions
     * @return Model|null
     */
    public function findWhere($conditions): Model|null
    {
        return $this->model()->where($conditions)->first();
    }

    /**
     * @param $id
     * @param $data
     * @return Model
     */
    public function update($id, $data): Model
    {
        return tap($this->show($id))->update($data);
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id): bool
    {
        return $this->show($id)->delete();
    }

    /**
     * Search with model by conditions
     * @param $conditions
     * @return mixed
     */
    public function searchBy($conditions): Collection
    {
        return $this->model()->where($conditions)->get();
    }

    /**
     * @param $attribute
     * @param $array
     * @return mixed
     */
    public function findIn($attribute, $array): Collection
    {
        return $this->model()->whereIn($attribute, $array)->get();
    }
}
