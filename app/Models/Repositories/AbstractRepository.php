<?php

namespace App\Models\Repositories;

abstract class AbstractRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Find one register
     *
     * @param int $id
     * @return mixed
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * Find one register or fail
     *
     * @param int $id
     * @return mixed
     */
    public function findOrFail(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Find first register
     *
     * @return mixed
     */
    public function first()
    {
        return $this->model->first();
    }

    /**
     * Get all registers
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Get with paginate
     *
     * @param int $limit
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function paginate(int $limit = 10)
    {
        return $this->model->paginate($limit);
    }

    /**
     * Create new register
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Update one register
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data) : bool
    {
        return $this->findOrFail($id)->update($data);
    }

    /**
     * Delete one register
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id) : bool
    {
        return $this->model->findOrFail($id)->delete();
    }

    /**
     * Force delete one register
     *
     * @param int $id
     * @return bool
     */
    public function forceDelete(int $id) : bool
    {
        return $this->model->findOrFail($id)->forceDelete();
    }
}