<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property int $indicator_one_id 
 * @property string $founder 
 * @property string $weight 
 * @property string $useTime 
 * @property string $unUseTime 
 * @property string $status 
 * @property string $content 
 */
class EvaIndicatorTwo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eva_indicator_two';
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
    protected $casts = ['id' => 'integer', 'indicator_one_id' => 'integer'];
}