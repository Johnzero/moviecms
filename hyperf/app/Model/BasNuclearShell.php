<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $hydrogen 
 * @property string $steam 
 * @property string $avgPress 
 * @property string $inWallTemp 
 * @property string $outWallTemp 
 * @property string $inWallPress 
 * @property string $outWallPress 
 * @property string $radioSpeed 
 * @property string $radioTime 
 * @property string $radioStrong 
 * @property int $inside_id 
 * @property string $avgTemp 
 * @property string $createTime 
 * @property int $type 
 */
class BasNuclearShell extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_nuclear_shell';
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
    protected $casts = ['id' => 'integer', 'inside_id' => 'integer', 'type' => 'integer'];
}