<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $start_time 
 * @property string $end_time 
 * @property string $description 
 * @property string $status 
 * @property string $level 
 * @property int $scenar_id 
 * @property int $rally_id 
 * @property int $item_id 
 * @property int $staff_id 
 */
class BusPlan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_plan';
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
    protected $casts = ['id' => 'integer', 'scenar_id' => 'integer', 'rally_id' => 'integer', 'item_id' => 'integer', 'staff_id' => 'integer'];
}