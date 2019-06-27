<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\Activitylog\Traits\LogsActivity;

class Portfolio extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;
    use LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'text',
        'url',
        'active',
    ];
    
    /*
     * The attributes that are logged
     *
     * @var array
     */
    protected static $logAttributes = [
        'id', 
        'title',
        'text',
        'url',
        'active',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'deleted_at'];

    public function images()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id')->orderBy('order');
    }

    /**
     * Return the url of first image or sem-imagem
     * @return string Url of Image
     */
    public function firstImage()
    {
        try {
            return  $this
                        ->hasMany(PortfolioImage::class, 'portfolio_id')
                        ->orderBy('order')
                        ->first()
                        ->image;
        }
        catch(\Exception $e) {
            return env('APP_URL').'/img/template/painel/sem-imagem.jpg';
        }
    }

}
