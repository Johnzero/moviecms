<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $mid 
 * @property int $rid 
 */
class MenuRole extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu_role';
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
    protected $casts = ['id' => 'integer', 'mid' => 'integer', 'rid' => 'integer'];
}