<?php

namespace YDTBWidgetRoot;

use YDTBWidgets\Providers\ApiServiceProvider;
use YDTBWidgets\Providers\CommandServiceProvider;
use YDTBWidgets\Providers\WidgetProvider;
use YDTBWidgets\Utils\Updater;

class Plugin
{
    private $plugin_path;

    /**
     * Constructor for the Plugin class.
     *
     * This method initializes the plugin by performing necessary checks.
     * If the plugin checks fail, it ensures that only the safe providers
     * (e.g., the updater) are registered to maintain functionality.
     * Otherwise, it proceeds to fully register the plugin.
     *
     * @return void
     */
    protected function register()
    {
        foreach ($this->providers() as $service) {
            (new $service)->register();
        }
    }
    /**
     * Performs pre-boot checks for the plugin.
     *
     * This method is used to verify if the plugin meets the necessary conditions 
     * to be loaded. For example, it can check if required dependencies such as 
     * Elementor or Elementor Pro are active. If any condition fails, the plugin 
     * will not load, and an appropriate admin notice can be displayed.
     *
     * @return bool True if all pre-boot checks pass, false otherwise.
     */

    public function plugin_checks()
    {
        // if (!is_plugin_active('elementor/elementor.php') || !is_plugin_active('elementor-pro/elementor-pro.php')) {
        //     add_action('admin_notices', function () {
        //         echo '<div class="notice notice-error"><p>Elementor and Elementor Pro must be installed and activated for YDTB Elements plugin to work.</p></div>';
        //     });
        //     return false;
        // }
        return true;
    }
}