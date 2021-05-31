<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $workTime 
 * @property string $expose 
 * @property string $heart 
 * @property string $pressHigh 
 * @property string $pressLow 
 * @property int $staff_id 
 * @property string $createTime 
 * @property string $longitude 
 * @property string $latitude 
 * @property string $altitude 
 * @property int $type 
 * @property string $value 
 * @property string $dose_rate 
 */
class BasStaffStatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_staff_status';
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
    protected $casts = ['id' => 'integer', 'staff_id' => 'integer', 'type' => 'integer'];
}