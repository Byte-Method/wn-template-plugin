<?php

namespace ZachCO\TemplatePlugin;

use System\Classes\PluginBase;

class Plugin extends PluginBase {
    /**
     * @var bool Plugin requires elevated permissions.
     */
    public $elevated = false;

    /**
     * @var array Plugin dependencies
     */
    public $require = [];

    /**
     * Returns plugin info. plugin.yaml is preferred.
     */
    //public function pluginDetails() {}

    //public function register() {}

    public function boot() {
        Validator::extend(Rules\MyRule::NAME, Rules\MyRule::class);
    }

    //public function registerMarkupTags() {}

    public function registerComponents() {
        return [
            Components\ComponentTemplate::class => Components\ComponentTemplate::SHORT_NAME,
        ];
    }

    //public function registerNavigation() {}

    public function registerPermissions() {
        return [
            'zachco.templateplugin.access_settings' => [
                'label' => 'zachco.templateplugin::lang.permission.access_settings',
                'tab'   => 'zachco.templateplugin::lang.permission_tab.plugin',
                'order' => 200,
                'roles' => [
                    // role API codes
                ]
            ],
        ];
    }

    public function registerSettings() {
        return [
            'settings' => [
                'label'       => 'zachco.templateplugin::lang.settings.label',
                'description' => 'zachco.templateplugin::lang.settings.description',
                'category'    => 'zachco.templateplugin::lang.settings.category',
                'icon'        => 'icon-cog',
                'class'       => Models\Settings::class,
                'order'       => 500,
                'keywords'    => 'zachco',
                'permissions' => [
                    'zachco.templateplugin.access_settings'
                ]
            ],
        ];
    }

    //public function registerFormWidgets() {}

    //public function registerReportWidgets() {}

    /*
    public function registerListColumnTypes() {
        return [
            Classes\MyColumnType::SHORT_NAME => Classes\MyColumnType,
        ];
    }
    */

    //public function registerMailLayouts() {}
    
    //public function registerMailTemplates() {}

    //public function registerMailPartials() {}

    /*
    public function registerSchedule($schedule) {
        // Call method daily
        $schedule->call(function() {
            // ...
        })->daily();

        // Run command
        $schedule->command('cache:clear')->daily();

        // Execute OS command
        $schedule->exec('node /home/acme/script.js')->daily();
    }
    */
}
