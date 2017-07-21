<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/20/2017
 * Time: 11:18 AM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class CarRepository implements CarRepositoryInterface
{
    /**
     * @var Car
     */
    private $model;

    /**
     * CarRepository constructor.
     * @param Car $model
     */
    public function __construct(Car $model)
    {

        $this->model = $model;
    }

    /**
     * @return Collection
     */
    public function findAll()
    {
        return $this->model->all();
    }

    /**
     * @param $id
     * @return Model
     */
    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @param $howMany
     * @return LengthAwarePaginator
     */
    public function findByPaginate($howMany)
    {
        return $this->model->paginate($howMany);
    }

    /**
     * @param $value
     * @param $name
     * @param int $ignoreId
     * @return Collection
     */
    public function findByList($value, $name, $ignoreId = 0)
    {
        return $this->model->where('id', '!=', $ignoreId)->pluck($name, $value);
    }
}