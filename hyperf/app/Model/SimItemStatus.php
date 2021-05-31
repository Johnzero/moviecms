<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $item_id 
 * @property string $isCar 
 * @property string $oil 
 * @property string $durability 
 * @property int $durabRule 
 * @property int $expose 
 * @property int $exposeRule 
 * @property string $workTime 
 * @property string $longitude 
 * @property string $latitude 
 * @property string $value 
 * @property int $doseRule 
 * @property string $status 
 * @property string $createTime 
 * @property int $type 
 * @property string $residueDose 
 * @property string $quellDose 
 */
class SimItemStatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sim_item_status';
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
    protected $casts = ['id' => 'integer', 'item_id' => 'integer', 'durabRule' => 'integer', 'expose' => 'integer', 'exposeRule' => 'integer', 'doseRule' => 'integer', 'type' => 'integer'];
}