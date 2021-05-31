<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $groupOneName 
 * @property string $task 
 * @property int $people 
 * @property string $remark 
 * @property string $groupOneLeader 
 * @property int $army_id 
 */
class BusGroupOne extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_group_one';
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
    protected $casts = ['id' => 'integer', 'people' => 'integer', 'army_id' => 'integer'];
}