<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $planId 
 * @property int $scenarId 
 * @property string $model 
 * @property string $modelId 
 * @property string $modelData 
 * @property string $begin 
 * @property string $end 
 * @property int $isArmy 
 * @property int $lineId 
 */
class BusPart extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_part';
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
    protected $casts = ['id' => 'integer', 'planId' => 'integer', 'scenarId' => 'integer', 'isArmy' => 'integer', 'lineId' => 'integer'];
}