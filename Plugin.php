<?php namespace Voipdeploy\ServerDebug;

use System\Classes\PluginBase;
use Backend;

/**
 * ServerDebug Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'ServerDebug',
            'description' => 'Provides information about PHP environment and Web Server configuration',
            'author' => 'Voipdeploy',
            'icon' => 'icon-wrench'
        ];
    }

    public function registerNavigation()
    {
        return [
            'serverdebug' => [
                'label' => 'voipdeploy.serverdebug::lang.nav.serverDebug',
                'url' => Backend::url('voipdeploy/serverdebug/debug/phpinfo'),
                'icon' => 'icon-wrench',
                'order' => 500,
                'permission' => 'voipdeploy.serverdebug.access_serverDebug',
                'sideMenu' => [
                    'serverparameters' => [
                        'label' => 'voipdeploy.serverdebug::lang.nav.serverParameters',
                        'icon' => 'icon-plug',
                        'url' => Backend::url('voipdeploy/serverdebug/debug/serverparameters'),
                        'permission' => 'voipdeploy.serverdebug.access_serverParams'
                    ],
                    'phpinfo' => [
                        'label' => 'voipdeploy.serverdebug::lang.nav.phpInfo',
                        'icon' => 'icon-code',
                        'url' => Backend::url('voipdeploy/serverdebug/debug/phpinfo'),
                        'permission' => 'voipdeploy.serverdebug.access_phpinfo'
                    ],
                ]
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'voipdeploy.serverdebug.access_serverDebug' => [
                'tab' => 'voipdeploy.serverdebug::lang.nav.serverDebug',
                'label' => 'voipdeploy.serverdebug::lang.permissions.access_serverDebug'
            ],
            'voipdeploy.serverdebug.access_serverParams' => [
                'tab' => 'voipdeploy.serverdebug::lang.nav.serverDebug',
                'label' => 'voipdeploy.serverdebug::lang.permissions.access_serverParams'
            ],
            'voipdeploy.serverdebug::lang.nav.phpInfo' => [
                'tab' => 'voipdeploy.serverdebug::lang.nav.serverDebug',
                'label' => 'voipdeploy.serverdebug::lang.permissions.access_phpInfo'
            ],
        ];
    }

}
