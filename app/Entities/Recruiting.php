<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use TCG\Voyager\Traits\Resizable;

/**
 * Class Recruiting.
 *
 * @package namespace App\Entities;
 */
class Recruiting extends Model implements Transformable
{
    use TransformableTrait;
    use Resizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    protected $table = 'recruiting';

}
