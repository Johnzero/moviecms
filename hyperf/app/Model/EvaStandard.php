<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $indicator_one_id 
 * @property string $indicator_two_id 
 * @property string $indicator_three_id 
 * @property string $condition 
 * @property string $type 
 * @property string $dataStandard 
 * @property string $datamax 
 * @property string $datamin 
 * @property string $weightAuto 
 * @property string $weightMaunal 
 */
class EvaStandard extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eva_standard';
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
    protected $casts = ['id' => 'integer'];
}