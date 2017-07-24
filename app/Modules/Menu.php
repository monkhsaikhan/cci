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

class Menu extends Model
{

    /**
     * @var string
     */
    protected $table = 'menu';

    /**
     * @var array
     */
    protected $fillable = ['name', 'position'];

    /**
     * @return HasMany
     */
    public function items()
    {
        return $this->hasMany(MenuItem::class, 'menu_id');
    }

}