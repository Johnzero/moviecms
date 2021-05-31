<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $stepLength 
 * @property string $startTime 
 * @property string $endTime 
 * @property string $place 
 * @property string $scope 
 * @property string $type 
 * @property string $thought 
 * @property string $description 
 * @property string $createTime 
 * @property string $show 
 * @property string $plan_id 
 * @property string $feature 
 * @property int $nuclear_id 
 * @property int $isActual 
 * @property string $I131 
 * @property string $Cs137 
 * @property string $Xe135 
 * @property string $Kr88 
 */
class BusScenar extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_scenar';
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
    protected $casts = ['id' => 'integer', 'nuclear_id' => 'integer', 'isActual' => 'integer'];
}