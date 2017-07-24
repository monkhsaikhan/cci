<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/19/2017
 * Time: 3:00 PM
 */

namespace App\Modules;


use App\Post\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class PageItems extends Model
{

    /**
     * @var string
     */
    protected $table = 'page_item';

    /**
     * @var array
     */
    protected $fillable = ['page_id', 'pageable', 'pageable_id', 'type', 'sort'];

    /**
     * @return MorphTo
     */
    public function itemable()
    {
        return $this->morphTo('pageable', 'pageable', 'pageable_id');
    }

    /**
     * @return BelongsToMany
     */
    public function offers()
    {
        return $this->belongsToMany(Car::class, 'car_offer','page_item_id', 'car_id');
    }

    /**
     * @return BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_offer', 'page_item_id', 'post_id');
    }

}