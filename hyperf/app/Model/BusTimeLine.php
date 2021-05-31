<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $scenarId 
 * @property string $startTime 
 * @property string $currentTime 
 * @property string $endTime 
 * @property string $status 
 * @property string $progress 
 * @property int $rate 
 * @property int $planId 
 * @property int $stepLength 
 * @property string $createTime 
 */
class BusTimeLine extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_time_line';
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
    protected $casts = ['id' => 'integer', 'scenarId' => 'integer', 'rate' => 'integer', 'planId' => 'integer', 'stepLength' => 'integer'];
}