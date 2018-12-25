<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SetupInfoRepository;
use App\Entities\SetupInfo;
use App\Validators\SetupInfoValidator;

/**
 * Class SetupInfoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SetupInfoRepositoryEloquent extends BaseRepository implements SetupInfoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SetupInfo::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SetupInfoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
