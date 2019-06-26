<?php

namespace App\Criteria\Site;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class AddressCriteria.
 *
 * @package namespace App\Criteria\Site;
 */
class ActiveCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model
                    ->where([
                        ['active', '=', 1],
                    ]);

        return $model;
    }
}
