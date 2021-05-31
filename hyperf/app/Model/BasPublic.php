<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $note 
 * @property string $description 
 * @property string $keyWord 
 * @property string $collection 
 * @property string $search 
 * @property string $startTime 
 * @property string $endTime 
 * @property int $num 
 */
class BasPublic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_public';
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
    protected $casts = ['id' => 'integer', 'num' => 'integer'];
}