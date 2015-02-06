<?php namespace Keios\ServerDebug;

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
            'author' => 'Keios',
            'icon' => 'icon-wrench'
        ];
    }

    public function registerNavigation()
    {
        return [
            'serverdebug' => [
                'label' => 'keios.serverdebug::lang.nav.serverDebug',
                'url' => Backend::url('keios/serverdebug/debug/phpinfo'),
                'icon' => 'icon-wrench',
                'order' => 500,
                'permissions' => ['keios.serverdebug.access_serverDebug'],
                'sideMenu' => [
                    'serverparameters' => [
                        'label' => 'keios.serverdebug::lang.nav.serverParameters',
                        'icon' => 'icon-plug',
                        'url' => Backend::url('keios/serverdebug/debug/serverparameters'),
                        'permissions' => ['keios.serverdebug.access_serverParams'],
                    ],
                    'phpinfo' => [
                        'label' => 'keios.serverdebug::lang.nav.phpInfo',
                        'icon' => 'icon-code',
                        'url' => Backend::url('keios/serverdebug/debug/phpinfo'),
                        'permissions' => ['keios.serverdebug.access_serverDebug'],
                    ],
		    'hhvminfo' => [
			'label' => 'keios.serverdebug::lang.nav.hhvmInfo',
			'icon' => 'icon-code',
			'url' => Backend::url('keios/serverdebug/debug/hhvminfo'),
			'permissions' => ['keios.serverdebug.access_hhvmInfo'],
		    ],

                ]
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'keios.serverdebug.access_serverDebug' => [
                'tab' => 'keios.serverdebug::lang.nav.serverDebug',
                'label' => 'keios.serverdebug::lang.permissions.access_serverDebug'
            ],
            'keios.serverdebug.access_serverParams' => [
                'tab' => 'keios.serverdebug::lang.nav.serverDebug',
                'label' => 'keios.serverdebug::lang.permissions.access_serverParams'
            ],
            'keios.serverdebug.access_phpInfo' => [
                'tab' => 'keios.serverdebug::lang.nav.serverDebug',
                'label' => 'keios.serverdebug::lang.permissions.access_phpInfo'
            ],
            'keios.serverdebug.access_hhvmInfo' => [
                'tab' => 'keios.serverdebug::lang.nav.serverDebug',
                'label' => 'keios.serverdebug::lang.permissions.access_hhvmInfo'
            ],

        ];
    }

}
