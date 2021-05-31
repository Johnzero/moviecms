<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $type 
 * @property string $level 
 * @property string $desception 
 * @property string $location 
 * @property string $startTime 
 * @property string $endTime 
 * @property int $scenar_id 
 * @property string $scnarText 
 * @property int $plan_id 
 * @property string $planText 
 * @property string $commandText 
 * @property string $rescueText 
 * @property string $effectText 
 * @property string $totalText 
 * @property int $manual_id 
 * @property string $manualText 
 * @property int $auto_id 
 * @property string $autoText 
 */
class EvaReport extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eva_report';
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
    protected $casts = ['id' => 'integer', 'scenar_id' => 'integer', 'plan_id' => 'integer', 'manual_id' => 'integer', 'auto_id' => 'integer'];
}