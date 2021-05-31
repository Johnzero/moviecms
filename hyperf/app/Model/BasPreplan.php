<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $preNum 
 * @property string $preName 
 * @property string $description 
 * @property string $version 
 * @property string $level 
 * @property string $useTime 
 * @property string $department 
 * @property string $signName 
 * @property string $testUrl 
 * @property int $nuclear_id 
 * @property string $file 
 */
class BasPreplan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_preplan';
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
    protected $casts = ['id' => 'integer', 'nuclear_id' => 'integer'];
}