<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/20/2017
 * Time: 10:27 AM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Model;

class Background extends Model
{

    /**
     * @var string
     */
    protected $table = 'background';

    /**
     * @var array
     */
    protected $fillable = ['title', 'path'];

}