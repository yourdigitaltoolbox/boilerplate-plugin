<?php

namespace YDTBBP;

use YDTBBP\Providers\ApiServiceProvider;
use YDTBBP\Providers\CommandServiceProvider;


class Plugin
{
    /**
     * Plugin constructor.
     */
    public function __construct()
    {
        if (!$this->plugin_checks()) {
            return;
        }
        $this->register();
    }

    /**
     * Register the providers
     */

    protected function providers()
    {
        return [
            ApiServiceProvider::class,
            CommandServiceProvider::class,
        ];
    }

    /**
     * Run each providers' register function
     */

    protected function register()
    {
        foreach ($this->providers() as $service) {
            (new $service)->register();
        }
    }

    /**
     * Check for requirements, like other plugins being installed and activated etc... Plus, anything else you want to check prior to booting the plugin
     */

    public function plugin_checks()
    {
        return true;
    }
}
