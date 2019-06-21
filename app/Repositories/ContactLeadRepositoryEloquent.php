<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ContactLeadRepository;
use App\Models\ContactLead;
use App\Validators\ContactLeadValidator;

/**
 * Class ContactLeadRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ContactLeadRepositoryEloquent extends BaseRepository implements ContactLeadRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ContactLead::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
