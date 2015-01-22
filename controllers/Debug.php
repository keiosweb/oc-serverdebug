<?php namespace Voipdeploy\ServerDebug\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Debug Back-end Controller
 */
class Debug extends Controller
{

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Voipdeploy.ServerDebug', 'serverdebug', 'debug');
    }

    public function serverparameters()
    {
        $this->vars['serverParams'] = $_SERVER;
    }

    public function phpinfo()
    {
    }
}