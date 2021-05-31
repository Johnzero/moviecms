<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $title 
 * @property string $note 
 * @property string $source 
 * @property string $url 
 * @property string $type 
 * @property string $author 
 * @property int $public_id 
 */
class BasPublicList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bas_public_list';
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
    protected $casts = ['id' => 'integer', 'public_id' => 'integer'];
}