<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $scenarId 
 * @property int $planId 
 * @property string $subject 
 * @property string $sender 
 * @property string $size 
 * @property string $secret 
 * @property string $grade 
 * @property string $type 
 * @property string $content 
 * @property string $sendTime 
 * @property string $sendAddress 
 * @property string $url 
 */
class BusMessage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_message';
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
    protected $casts = ['id' => 'integer', 'scenarId' => 'integer', 'planId' => 'integer'];
}