<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $startTime 
 * @property string $workTime 
 * @property string $target 
 * @property string $type 
 * @property string $description 
 * @property int $item_id 
 * @property string $feedback 
 * @property string $object 
 * @property string $value 
 * @property int $route_id 
 */
class BusOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_order';
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
    protected $casts = ['id' => 'integer', 'item_id' => 'integer', 'route_id' => 'integer'];
}