<?php

namespace YDTBBP\Providers;

use YDTBBP\Interfaces\Provider;
use YDTBBP\Server\Commands\ExampleCommand;

class CommandServiceProvider implements Provider
{
    public function register()
    {
        if (!defined('WP_CLI') || !WP_CLI) {
            return;
        }

        \WP_CLI::add_command('bp', ExampleCommand::class);
    }
}
