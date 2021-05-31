<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $armyName 
 * @property string $manage 
 * @property string $unit 
 * @property string $leader 
 * @property string $office 
 * @property string $contactName 
 * @property string $tel 
 * @property string $address 
 * @property int $people 
 * @property string $description 
 */
class BusArmy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_army';
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
    protected $casts = ['id' => 'integer', 'people' => 'integer'];
}