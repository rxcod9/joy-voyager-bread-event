<?php

return [

    /*
     * If enabled for voyager-bread-event package.
     */
    'enabled' => env('VOYAGER_BREAD_EVENT_ENABLED', true),

    /*
     * The config_key for voyager-bread-event package.
     */
    'config_key' => env('VOYAGER_BREAD_EVENT_CONFIG_KEY', 'joy-voyager-bread-event'),

    /*
     * The route_prefix for voyager-bread-event package.
     */
    'route_prefix' => env('VOYAGER_BREAD_EVENT_ROUTE_PREFIX', 'joy-voyager-bread-event'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadEvent\\Http\\Controllers',
    ],
];
