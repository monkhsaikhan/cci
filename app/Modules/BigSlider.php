<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/19/2017
 * Time: 12:18 PM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Model;

class BigSlider extends Model
{

    /**
     * @var string
     */
    protected $table = 'bigSlider';

    /**
     * @var array
     */
    protected $fillable = ['title','path'];

}