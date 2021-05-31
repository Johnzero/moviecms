<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $task_id 
 * @property int $order_id 
 * @property int $sort 
 * @property string $status 
 * @property string $startTime 
 * @property int $route_id 
 * @property int $item_id 
 * @property string $workTime 
 * @property string $endTime 
 */
class BusTaskOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_task_order';
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
    protected $casts = ['id' => 'integer', 'task_id' => 'integer', 'order_id' => 'integer', 'sort' => 'integer', 'route_id' => 'integer', 'item_id' => 'integer'];
}