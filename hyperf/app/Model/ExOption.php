<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $question_id 
 * @property string $examOption 
 * @property string $content 
 */
class ExOption extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ex_option';
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
    protected $casts = ['id' => 'integer', 'question_id' => 'integer'];
}