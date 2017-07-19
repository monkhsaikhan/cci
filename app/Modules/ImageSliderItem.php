<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/19/2017
 * Time: 5:01 PM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Model;

class ImageSliderItem extends Model
{

    /**
     * @var string
     */
    protected $table = 'image_slider_items';

    /**
     * @var array
     */
    protected $fillable = ['image_slider_id', 'path'];

}