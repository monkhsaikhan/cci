<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/18/2017
 * Time: 3:24 PM
 */

namespace App\Post;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * @var string
     */
    protected $table = 'category';

    /**
     * @var array
     */
    protected $fillable = ['name'];

}