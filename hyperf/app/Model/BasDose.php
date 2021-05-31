<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $item_id 
 * @property string $itemname 
 * @property string $monitortime 
 * @property string $latitude 
 * @property string $longitude 
 * @property string $realvalue 
 * @property string $unit 
 * @property string $updatetime 
 * @property string $flag 
 * @property string $gridx 
 * @property string $gridy 
 * @property string $datastatus 
 * @property int $type 
 */
class BasDose extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_dose';
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
    protected $casts = ['id' => 'integer', 'item_id' => 'integer', 'type' => 'integer'];
}