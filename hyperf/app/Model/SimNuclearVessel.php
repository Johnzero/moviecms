<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $intact 
 * @property string $avgTemp 
 * @property string $avgWater 
 * @property string $hydrogen 
 * @property int $inside_id 
 * @property string $createTime 
 * @property int $type 
 */
class SimNuclearVessel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sim_nuclear_vessel';
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
    protected $casts = ['id' => 'integer', 'inside_id' => 'integer', 'type' => 'integer'];
}