<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $messageId 
 * @property int $armyId 
 * @property int $oneId 
 * @property int $twoId 
 */
class BusMessageArmy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_message_army';
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
    protected $casts = ['id' => 'integer', 'messageId' => 'integer', 'armyId' => 'integer', 'oneId' => 'integer', 'twoId' => 'integer'];
}