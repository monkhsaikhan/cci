<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/19/2017
 * Time: 4:06 PM
 */

namespace App\Modules;


use App\Core\RepositoryInterface;

interface PageRepositoryInterface extends RepositoryInterface
{

    /**
     * @return mixed
     */
    public function findHome();
}