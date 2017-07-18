<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/18/2017
 * Time: 4:05 PM
 */

namespace App\Post;


use Laracodes\Presenter\Presenter;

class PostPresenter extends Presenter
{

    public function category()
    {
        $category = $this->model->category;

        if(!is_null($category))
        {
            return $category->name;
        }

        return '';
    }

}