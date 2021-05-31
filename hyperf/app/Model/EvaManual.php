<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property int $scenar_id 
 * @property int $plan_id 
 * @property string $weightScore 
 * @property string $manualExpret 
 * @property string $manualScores 
 * @property int $total 
 */
class EvaManual extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eva_manual';
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
    protected $casts = ['id' => 'integer', 'scenar_id' => 'integer', 'plan_id' => 'integer', 'total' => 'integer'];
}