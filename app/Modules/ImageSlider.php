<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/19/2017
 * Time: 12:15 PM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ImageSlider extends Model
{

    /**
     * @var string
     */
    protected $table = 'image_slider';

    /**
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * @return HasMany
     */
    public function items()
    {
        return $this->hasMany(ImageSliderItem::class, 'image_slider_id');
    }

}