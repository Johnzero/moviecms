<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property int $nuclear_id 
 * @property string $coreTemp 
 * @property string $coreOutTemp 
 * @property string $loopPress 
 * @property string $loopSpeed 
 * @property string $steamValue 
 * @property string $steamPress 
 * @property string $pond 
 * @property int $vessel_id 
 * @property int $shell_id 
 * @property string $createTime 
 * @property string $type 
 */
class SimNuclearInside extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sim_nuclear_inside';
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
    protected $casts = ['id' => 'integer', 'nuclear_id' => 'integer', 'vessel_id' => 'integer', 'shell_id' => 'integer'];
}