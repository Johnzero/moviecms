<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $indicator_one_id 
 * @property int $indicator_two_id 
 * @property int $indicator_three_id 
 * @property int $auto_id 
 * @property string $tmpWeight 
 * @property string $weightScores 
 * @property string $score 
 * @property string $object 
 * @property string $rule 
 */
class EvaAutoScore extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eva_auto_score';
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
    protected $casts = ['id' => 'integer', 'indicator_one_id' => 'integer', 'indicator_two_id' => 'integer', 'indicator_three_id' => 'integer', 'auto_id' => 'integer'];
}