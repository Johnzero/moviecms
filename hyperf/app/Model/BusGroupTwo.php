<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $groupTwoName 
 * @property string $task 
 * @property int $people 
 * @property string $groupTwoLeader 
 * @property int $one_id 
 */
class BusGroupTwo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_group_two';
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
    protected $casts = ['id' => 'integer', 'people' => 'integer', 'one_id' => 'integer'];
}