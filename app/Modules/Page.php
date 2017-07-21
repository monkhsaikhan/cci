<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/19/2017
 * Time: 2:59 PM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{

    /**
     * @var string
     */
    protected $table = 'page';

    /**
     * @var array
     */
    protected $fillable = ['title', 'is_current'];

    /**
     * @return HasMany
     */
    public function items()
    {
        return $this->hasMany(PageItems::class, 'page_id')->orderBy('sort', 'asc');
    }

}