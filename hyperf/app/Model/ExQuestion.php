<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $content 
 * @property string $score 
 * @property string $creator 
 * @property int $num 
 * @property string $type 
 * @property string $diff 
 * @property int $isObj 
 * @property string $option 
 * @property string $answer 
 * @property string $rule 
 * @property string $answerA 
 * @property string $answerB 
 * @property string $answerC 
 * @property string $answerD 
 */
class ExQuestion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ex_question';
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
    protected $casts = ['id' => 'integer', 'num' => 'integer', 'isObj' => 'integer'];
}