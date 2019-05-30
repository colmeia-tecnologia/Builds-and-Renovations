<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EbookRepository;
use App\Models\Ebook;
use App\Validators\EbookValidator;

/**
 * Class EbookRepositoryEloquent
 * @package namespace App\Repositories;
 */
class EbookRepositoryEloquent extends BaseRepository implements EbookRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Ebook::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
