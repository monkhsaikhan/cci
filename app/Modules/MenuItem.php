<?php
/**
 * Created by PhpStorm.
 * User: Munkhsaikhan
 * Date: 7/21/2017
 * Time: 5:36 PM
 */

namespace App\Modules;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuItem extends Model
{

    /**
     * @var string
     */
    protected $table = 'menu_item';

    /**
     * @var array
     */
    protected $fillable = ['menu_id', 'name', 'link', 'sort', 'root_id'];

    /**
     * @return HasMany
     */
    public function children()
    {
        return $this->hasMany(MenuItem::class, 'root_id');
    }

}