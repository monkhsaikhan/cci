<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/19/2017
 * Time: 4:06 PM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class PageRepository implements PageRepositoryInterface
{
    /**
     * @var Page
     */
    private $model;

    /**
     * PageRepository constructor.
     * @param Page $model
     */
    public function __construct(Page $model)
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

    /**
     * @return mixed
     */
    public function findHome()
    {
        return $this->model->where('is_current', '=', '1')->first();
    }
}