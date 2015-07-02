<?php namespace Cybeard\Testplugin;

use Backend\Facades\Backend;
use System\Classes\PluginBase;

/**
 * testplugin Plugin Information File
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
            'name'        => 'testplugin',
            'description' => 'Example plugin for october',
            'author'      => 'cybeard',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerNavigation()
    {
        return [
            'post' => [
                'label'       => 'Test Plugin',
                'url'         => Backend::url('cybeard/testplugin/posts'),
                'icon'        => 'icon-pencil',
                'permissions' => ['cybeard.testplugin.*'],
                'order'       => 500,
            ]
        ];
    }

}
