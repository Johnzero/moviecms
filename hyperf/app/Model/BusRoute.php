<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $tag 
 * @property string $origin 
 * @property string $destination 
 * @property string $duration 
 * @property int $isOpen 
 * @property string $distance 
 * @property string $weight 
 * @property string $tactics 
 * @property string $routePoints 
 * @property string $name 
 * @property string $obstacles 
 * @property string $obligators 
 * @property string $navmsg 
 */
class BusRoute extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_route';
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
    protected $casts = ['id' => 'integer', 'isOpen' => 'integer'];
}