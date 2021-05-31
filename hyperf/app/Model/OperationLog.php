<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $operModul 
 * @property string $operType 
 * @property string $operDesc 
 * @property string $operMethod 
 * @property string $operRequParam 
 * @property string $operRespParam 
 * @property string $operUserId 
 * @property string $operUserName 
 * @property string $operIp 
 * @property string $operUri 
 * @property string $operCreateTime 
 */
class OperationLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'operation_log';
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