<?php

namespace App\Criteria\Blog;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class ArchiveCriteria
 * @package namespace App\Criteria\Blog;
 */
class ArchiveCriteria implements CriteriaInterface
{
    private $ano;
    private $mes;

    public function __construct($ano, $mes)
    {
        $this->ano = $ano;
        $this->mes = $mes;
    }

    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model
                    ->whereYear('created_at', '=', $this->ano)
                    ->whereMonth('created_at', '=', $this->mes)
                    ->orderBy('created_at', 'DESC');

        return $model;
    }
}
