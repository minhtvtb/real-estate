<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EenementHouseRepository;
use App\Entities\EenementHouse;
use App\Validators\EenementHouseValidator;

/**
 * Class EenementHouseRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EenementHouseRepositoryEloquent extends BaseRepository implements EenementHouseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EenementHouse::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EenementHouseValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
