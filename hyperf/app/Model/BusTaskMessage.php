<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $scenarId 
 * @property int $planId 
 * @property int $taskId 
 * @property string $title 
 * @property string $startTime 
 * @property string $endTime 
 * @property string $content 
 * @property string $standard 
 * @property string $url 
 */
class BusTaskMessage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_task_message';
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
    protected $casts = ['id' => 'integer', 'scenarId' => 'integer', 'planId' => 'integer', 'taskId' => 'integer'];
}