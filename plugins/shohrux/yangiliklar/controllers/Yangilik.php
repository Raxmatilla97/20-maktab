<?php namespace Shohrux\Yangiliklar\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Yangilik extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Shohrux.Yangiliklar', 'main-menu-item', 'side-menu-item');
    }
}
