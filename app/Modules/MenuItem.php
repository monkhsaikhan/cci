<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/21/2017
 * Time: 5:36 PM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    /**
     * @var string
     */
    protected $table = 'menu_item';

    /**
     * @var array
     */
    protected $fillable = ['menu_id', 'name', 'link', 'sort'];

}