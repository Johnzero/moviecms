<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $description 
 * @property string $type 
 * @property string $priority 
 * @property string $status 
 * @property string $object 
 * @property string $condition1 
 * @property string $condition 
 * @property string $threshold 
 * @property string $threshold1 
 * @property string $condition2 
 * @property string $threshold2 
 * @property string $condition3 
 * @property string $threshold3 
 * @property string $condition4 
 * @property string $threshold4 
 * @property string $condition5 
 * @property string $threshold5 
 * @property string $result 
 * @property string $level 
 */
class BasRule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_rule';
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