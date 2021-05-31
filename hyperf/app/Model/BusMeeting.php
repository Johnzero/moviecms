<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property int $scenar_id 
 * @property string $description 
 * @property string $note 
 * @property string $startTime 
 * @property string $endTime 
 * @property string $meetStaff 
 */
class BusMeeting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_meeting';
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
    protected $casts = ['id' => 'integer', 'scenar_id' => 'integer'];
}