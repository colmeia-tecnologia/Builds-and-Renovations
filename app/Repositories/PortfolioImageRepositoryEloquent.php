<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PortfolioImageRepository;
use App\Models\PortfolioImage;
use App\Validators\PortfolioImageValidator;

/**
 * Class PortfolioImageRepositoryEloquent
 * @package namespace App\Repositories;
 */
class PortfolioImageRepositoryEloquent extends BaseRepository implements PortfolioImageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PortfolioImage::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
