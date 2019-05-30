<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ServiceRepository;
use App\Models\Service;
use App\Validators\ServiceValidator;

/**
 * Class ServiceRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ServiceRepositoryEloquent extends BaseRepository implements ServiceRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Service::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    

    /**
     * Generate Array to be used in comboboxes
     * @return array Title,ID
     */
    public function comboboxList()
    {
        return $this->model->pluck('name', 'id');
    }
}
