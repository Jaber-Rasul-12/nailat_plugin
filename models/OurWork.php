<?php namespace Nailat\Nailat\Models;

use Model;

/**
 * Model
 */
class OurWork extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nailat_nailat_ourworks';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name'        => 'required|unique:nailat_nailat_ourworks,name',
    ];

    public $attachOne = [
    'avatar' => \System\Models\File::class,
];

public $attachMany = [
    'photos' => \System\Models\File::class,
];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
}
