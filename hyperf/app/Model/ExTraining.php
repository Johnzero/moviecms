<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $creator 
 * @property string $type 
 * @property string $file 
 * @property string $description 
 * @property \Carbon\Carbon $created_at 
 * @property string $nuclear_id 
 */
class ExTraining extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ex_training';
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
    protected $casts = ['id' => 'integer', 'created_at' => 'datetime'];
}