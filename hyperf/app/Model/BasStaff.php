<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $task 
 * @property string $grade 
 * @property string $work 
 * @property string $sex 
 * @property int $age 
 * @property string $tel 
 * @property string $address 
 * @property string $status 
 * @property string $note 
 * @property string $skill 
 * @property string $glory 
 * @property int $army_id 
 * @property int $one_id 
 * @property int $two_id 
 */
class BasStaff extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_staff';
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
    protected $casts = ['id' => 'integer', 'age' => 'integer', 'army_id' => 'integer', 'one_id' => 'integer', 'two_id' => 'integer'];
}