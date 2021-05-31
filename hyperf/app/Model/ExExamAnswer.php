<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $examStaff_id 
 * @property int $question_id 
 * @property string $answer 
 * @property string $isRight 
 * @property string $score 
 */
class ExExamAnswer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ex_exam_answer';
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
    protected $casts = ['id' => 'integer', 'examStaff_id' => 'integer', 'question_id' => 'integer'];
}