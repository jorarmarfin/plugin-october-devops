<?php namespace LuisMayta\Devops\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use LuisMayta\Devops\Models\Peliculas;

class PeliculasController extends Controller {
    public $pageTitle = 'test de title';
    public $implement = ['Backend.Behaviors.ListController'];
    public $listConfig = 'list_config.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LuisMayta.Devops', 'main-menu-item');
    }

    public function index()
    {
        $this->vars['nombre'] = 'Muppets';
        $this->vars['peliculas'] = Peliculas::all();;
    }
}