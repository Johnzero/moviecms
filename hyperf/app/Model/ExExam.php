<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $exam_name 
 * @property string $creator 
 * @property string $time 
 * @property string $type 
 * @property int $paper_id 
 * @property string $start_time 
 * @property string $end_time 
 * @property string $duration 
 */
class ExExam extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ex_exam';
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
    protected $casts = ['id' => 'integer', 'paper_id' => 'integer'];
}