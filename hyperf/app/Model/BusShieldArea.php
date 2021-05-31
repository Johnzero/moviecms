<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property int $nuclear_id 
 * @property string $remark 
 * @property string $radius 
 * @property string $longitude 
 * @property string $latitude 
 * @property string $type 
 * @property string $doseType 
 * @property string $condition 
 * @property string $threshold 
 */
class BusShieldArea extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_shield_area';
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
    protected $casts = ['id' => 'integer', 'nuclear_id' => 'integer'];
}