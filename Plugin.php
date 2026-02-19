<?php namespace Nailat\Nailat;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{


    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'اعدادات الموقع',
                'description' => 'اعدادات الموقع',
                'category'    => 'Nailat',
                'icon'        => 'icon-cog',
                'class'       => 'Nailat\Nailat\Models\SettingWebsiate',
                'permissions' => ['setting_nailat']
            ]
        ];
    }

        public function registerComponents()
    {
        return [
            'Nailat\Nailat\Components\GeneralComponent' => 'GeneralComponent'
        ];
    }
}
