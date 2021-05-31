<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $start_time 
 * @property string $type 
 * @property int $model_id 
 * @property string $longitude 
 * @property string $latitude 
 * @property string $ids 
 * @property string $isshow 
 */
class BusSituation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_situation';
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
    protected $casts = ['id' => 'integer', 'model_id' => 'integer'];
}