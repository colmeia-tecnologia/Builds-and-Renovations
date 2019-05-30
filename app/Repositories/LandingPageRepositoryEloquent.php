<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\LandingPageRepository;
use App\Models\LandingPage;
use App\Validators\LandingPageValidator;

/**
 * Class LandingPageRepositoryEloquent
 * @package namespace App\Repositories;
 */
class LandingPageRepositoryEloquent extends BaseRepository implements LandingPageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return LandingPage::class;
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
        return $this->model->pluck('title', 'id');
    }
}
