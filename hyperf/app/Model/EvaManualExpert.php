<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $grade 
 * @property string $weight 
 * @property string $industry 
 * @property string $manualScores 
 * @property int $score 
 * @property int $manual_id 
 * @property int $expert_id 
 */
class EvaManualExpert extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eva_manual_expert';
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
    protected $casts = ['id' => 'integer', 'score' => 'integer', 'manual_id' => 'integer', 'expert_id' => 'integer'];
}