<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $autoSum 
 * @property int $scenar_id 
 * @property int $plan_id 
 * @property string $autoScores 
 * @property string $name 
 * @property int $timeline_id 
 * @property int $total 
 */
class EvaAuto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eva_auto';
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
    protected $casts = ['id' => 'integer', 'scenar_id' => 'integer', 'plan_id' => 'integer', 'timeline_id' => 'integer', 'total' => 'integer'];
}