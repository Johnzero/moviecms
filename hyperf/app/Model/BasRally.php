<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property int $scenarId 
 * @property string $createTime 
 * @property int $type 
 * @property string $longitude 
 * @property string $latitude 
 * @property string $desc 
 */
class BasRally extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_rally';
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
    protected $casts = ['id' => 'integer', 'scenarId' => 'integer', 'type' => 'integer'];
}