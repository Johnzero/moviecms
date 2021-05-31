<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $url 
 * @property string $path 
 * @property string $component 
 * @property string $name 
 * @property string $iconCls 
 * @property int $keepAlive 
 * @property int $requireAuth 
 * @property int $parentId 
 * @property int $enabled 
 */
class Menu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu';
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
    protected $casts = ['id' => 'integer', 'keepAlive' => 'integer', 'requireAuth' => 'integer', 'parentId' => 'integer', 'enabled' => 'integer'];
}