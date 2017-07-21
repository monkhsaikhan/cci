<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/20/2017
 * Time: 11:17 AM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    /**
     * @var string
     */
    protected $table = 'car';

    /**
     * @var array
     */
    protected $fillable = ['name', 'path', 'price', 'attribute', 'link'];

}