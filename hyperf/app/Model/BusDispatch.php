<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $task 
 * @property string $taskType 
 * @property string $grade 
 * @property string $radiation 
 * @property string $rule_id 
 * @property string $itemids 
 * @property string $shield_id 
 * @property string $action 
 * @property string $doseType 
 * @property string $condition 
 * @property string $threshold 
 */
class BusDispatch extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_dispatch';
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