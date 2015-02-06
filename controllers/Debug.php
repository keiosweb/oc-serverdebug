<?php namespace Keios\ServerDebug\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Support\Facades\Request;
use Lang;
/**
 * Debug Back-end Controller
 */
class Debug extends Controller
{
    public $requiredPermissions = ['keios.serverdebug.access_serverDebug'];
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Keios.ServerDebug', 'serverdebug', 'debug');
    }

    public function serverparameters()
    {
        $this->vars['serverParams'] = $_SERVER;
        $this->vars['baseUrl'] = (Request::getBaseUrl() ?: 'empty');
    }

    public function phpinfo()
    {
    }
    public function hhvminfo()
    {
    }

}
