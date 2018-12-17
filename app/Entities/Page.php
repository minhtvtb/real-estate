<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use TCG\Voyager\Traits\Resizable;

/**
 * Class Page.
 *
 * @package namespace App\Entities;
 */
class Page extends Model implements Transformable
{
    use TransformableTrait;

    use Resizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
