<?php

return [

    /*
     * If enabled for voyager-bread-contract package.
     */
    'enabled' => env('VOYAGER_BREAD_CONTRACT_ENABLED', true),

    /*
     * The config_key for voyager-bread-contract package.
     */
    'config_key' => env('VOYAGER_BREAD_CONTRACT_CONFIG_KEY', 'joy-voyager-bread-contract'),

    /*
     * The route_prefix for voyager-bread-contract package.
     */
    'route_prefix' => env('VOYAGER_BREAD_CONTRACT_ROUTE_PREFIX', 'joy-voyager-bread-contract'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadContract\\Http\\Controllers',
    ],
];
