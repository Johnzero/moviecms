<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $score 
 * @property string $creator 
 * @property int $num 
 * @property string $duration 
 * @property string $paperQuestion 
 */
class ExPaper extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ex_paper';
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