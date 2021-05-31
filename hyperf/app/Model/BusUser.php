<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $password 
 * @property int $staff_id 
 * @property int $count 
 * @property int $role_id 
 * @property int $isGis 
 */
class BusUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_user';
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
    protected $casts = ['id' => 'integer', 'staff_id' => 'integer', 'count' => 'integer', 'role_id' => 'integer', 'isGis' => 'integer'];
}