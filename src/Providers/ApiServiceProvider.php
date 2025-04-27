<?php

namespace YDTBBP\Providers;

use YDTBBP\Interfaces\Provider;
use YDTBBP\Server\API\ExampleAPI;

class ApiServiceProvider implements Provider
{
    public function register()
    {
        // Register the API routes
        // new ExampleAPI();
    }
}
