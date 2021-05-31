<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $item_no 
 * @property string $name 
 * @property string $model 
 * @property string $saveStatus 
 * @property string $itemStatus 
 * @property string $property 
 * @property string $itemUse 
 * @property string $itemClass 
 * @property string $annex 
 * @property string $address 
 * @property string $useTime 
 * @property string $tel 
 * @property string $manager 
 * @property int $army_id 
 * @property int $one_id 
 * @property int $two_id 
 * @property string $staffs 
 */
class BasItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_item';
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
    protected $casts = ['id' => 'integer', 'army_id' => 'integer', 'one_id' => 'integer', 'two_id' => 'integer'];
}