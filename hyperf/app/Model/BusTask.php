<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $start_time 
 * @property string $end_time 
 * @property string $duration 
 * @property string $target 
 * @property string $type 
 * @property string $mark 
 * @property int $sort 
 * @property string $description 
 * @property string $status 
 * @property string $item_id 
 * @property int $plan_id 
 * @property int $route_id 
 * @property int $return_id 
 */
class BusTask extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_task';
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
    protected $casts = ['id' => 'integer', 'sort' => 'integer', 'plan_id' => 'integer', 'route_id' => 'integer', 'return_id' => 'integer'];
}