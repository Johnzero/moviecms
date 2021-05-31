<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $staff_id 
 * @property int $exam_id 
 * @property int $paper_id 
 * @property string $score 
 */
class ExExamStaff extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ex_exam_staff';
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
    protected $casts = ['id' => 'integer', 'staff_id' => 'integer', 'exam_id' => 'integer', 'paper_id' => 'integer'];
}