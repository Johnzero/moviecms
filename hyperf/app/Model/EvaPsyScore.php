<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $staff_id 
 * @property int $workTime 
 * @property int $expose 
 * @property int $rule_id 
 * @property int $heart 
 * @property string $bloodpressure 
 * @property string $Breath 
 * @property string $Eye 
 * @property string $React 
 * @property string $Excute 
 * @property string $Score 
 * @property string $Level 
 * @property string $Description 
 */
class EvaPsyScore extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eva_psy_score';
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
    protected $casts = ['id' => 'integer', 'staff_id' => 'integer', 'workTime' => 'integer', 'expose' => 'integer', 'rule_id' => 'integer', 'heart' => 'integer'];
}