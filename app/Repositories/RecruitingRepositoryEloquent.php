<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\recruitingRepository;
use App\Entities\Recruiting;
use App\Validators\RecruitingValidator;

/**
 * Class RecruitingRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class RecruitingRepositoryEloquent extends BaseRepository implements RecruitingRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Recruiting::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
