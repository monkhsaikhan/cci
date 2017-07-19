<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/19/2017
 * Time: 3:00 PM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Model;
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

}