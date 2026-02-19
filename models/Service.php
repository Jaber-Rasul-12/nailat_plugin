<?php namespace Nailat\Nailat\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nailat_nailat_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name'        => 'required|unique:nailat_nailat_services,name',
    ];

    public $attachOne = [
    'avatar' => \System\Models\File::class,
];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
}
