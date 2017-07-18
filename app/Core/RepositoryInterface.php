<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/17/2017
 * Time: 2:57 PM
 */

namespace App\Core;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface RepositoryInterface
{
    /**
     * @return Collection
     */
    public function findAll();

    /**
     * @param $id
     * @return Model
     */
    public function findById($id);

    /**
     * @param $howMany
     * @return LengthAwarePaginator
     */
    public function findByPaginate($howMany);

    /**
     * @param $value
     * @param $name
     * @param int $ignoreId
     * @return Collection
     */
    public function findByList($value, $name, $ignoreId = 0);
}