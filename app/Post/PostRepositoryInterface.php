<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/18/2017
 * Time: 3:53 PM
 */

namespace App\Post;


use App\Core\RepositoryInterface;

interface PostRepositoryInterface extends RepositoryInterface
{
    /**
     * @param $type
     * @return mixed
     */
    public function findAllPosts($type);
}