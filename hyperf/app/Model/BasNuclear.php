<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $note 
 * @property string $manager 
 * @property string $tel 
 * @property string $geography 
 * @property string $address 
 * @property string $longitude 
 * @property string $latitude 
 * @property string $reactorType 
 * @property string $creatTime 
 * @property string $mark 
 */
class BasNuclear extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_nuclear';
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
    protected $casts = ['id' => 'integer'];
}