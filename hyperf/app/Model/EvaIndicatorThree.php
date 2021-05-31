<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property int $indicator_two_id 
 * @property string $founder 
 * @property string $weight 
 * @property string $useTime 
 * @property string $unUseTime 
 * @property string $status 
 * @property string $content 
 */
class EvaIndicatorThree extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eva_indicator_three';
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
    protected $casts = ['id' => 'integer', 'indicator_two_id' => 'integer'];
}