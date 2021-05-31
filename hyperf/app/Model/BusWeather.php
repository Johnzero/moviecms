<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $temperature 
 * @property string $pressure 
 * @property string $windspeed 
 * @property string $winddirection 
 * @property string $humidity 
 * @property string $rainfall 
 * @property string $rainfallDaily 
 * @property string $address 
 * @property string $createTime 
 * @property int $itemId 
 * @property string $atmosphereStability 
 * @property int $type 
 */
class BusWeather extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_weather';
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
    protected $casts = ['id' => 'integer', 'itemId' => 'integer', 'type' => 'integer'];
}