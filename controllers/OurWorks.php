<?php namespace Nailat\Nailat\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class OurWorks extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController'
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'ourworks' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Nailat.Nailat', 'Nailat', 'ourworks');
    }
}
