<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $kind 
 * @property string $founder 
 * @property string $weight 
 * @property string $useTime 
 * @property string $unUseTime 
 * @property string $status 
 */
class EvaIndicatorOne extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eva_indicator_one';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer'];
}