<?php

namespace YDTBBP\Server\API;

class ExampleAPI
{
    public function __construct()
    {
        add_action('rest_api_init', function () {
            register_rest_route('boilerplate/v1', '/howdy', [
                'methods' => 'GET',
                'callback' => [$this, 'howdy'],
                'permission_callback' => '__return_true',
            ]);
        });
    }

    public function howdy()
    {
        return [
            'message' => 'Howdy!',
        ];
    }
}