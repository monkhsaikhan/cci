<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/21/2017
 * Time: 5:36 PM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    /**
     * @var string
     */
    protected $table = 'menu';

    /**
     * @var array
     */
    protected $fillable = ['name', 'position'];

}