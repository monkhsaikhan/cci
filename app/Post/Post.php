<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/18/2017
 * Time: 3:22 PM
 */

namespace App\Post;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laracodes\Presenter\Traits\Presentable;

class Post extends Model
{

    use Presentable;

    /**
     * @var string
     */
    protected $presenter = 'App\Post\PostPresenter';

    /**
     * @var string
     */
    protected $table = 'post';

    /**
     * @var array
     */
    protected $fillable = ['category_id', 'title', 'content', 'user_id'];

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}