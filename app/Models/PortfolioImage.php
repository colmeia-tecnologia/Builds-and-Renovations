<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class PortfolioImage extends Model implements Transformable
{
    use TransformableTrait;
    use LogsActivity;

    protected $fillable = [
        'portfolio_id',
        'image',
        'title',
        'description',
        'order',
    ];

    /*
     * The attributes that are logged
     *
     * @var array
     */
    protected static $logAttributes = [
        'id', 
        'portfolio_id',
        'image',
        'title',
        'description',
        'order',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'deleted_at'];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'portfolio_id');
    }

}
