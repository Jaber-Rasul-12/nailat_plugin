<?php namespace Nailat\Nailat\Models;

use Model;
use Nailat\Nailat\Services\EmailVerificationService;

/**
 * Model
 */
class EmailSubscribe extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nailat_nailat_emailsubscribes';

        public $fillable=['email'];


    /**
     * @var array Validation rules
     */
    public $rules = [
        'email' => 'required|email|unique:nailat_nailat_emailsubscribes,email',
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];


    public function beforeCreate(){
        $object_email_vertifiy = new EmailVerificationService();
        if(!$object_email_vertifiy->verifyEmail($this->email)){
            throw new \ValidationException(['name' =>  'البريد غير صالح']);
        }
         
    }
}
