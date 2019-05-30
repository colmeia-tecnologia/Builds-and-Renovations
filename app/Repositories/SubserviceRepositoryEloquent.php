<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SubserviceRepository;
use App\Models\Subservice;
use App\Validators\SubserviceValidator;

/**
 * Class SubserviceRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SubserviceRepositoryEloquent extends BaseRepository implements SubserviceRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Subservice::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
