<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $src 
 * @property string $name 
 * @property string $scale 
 * @property string $longitude 
 * @property string $latitude 
 * @property string $opacity 
 * @property string $text 
 * @property string $type 
 */
class BusFrame extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_frames';
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