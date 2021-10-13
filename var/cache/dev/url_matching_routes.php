<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\BeautybaeController::accueil'], null, null, null, false, false, null]],
        '/beautybae' => [[['_route' => 'beautybae', '_controller' => 'App\\Controller\\BeautybaeController::index'], null, null, null, false, false, null]],
        '/prestation' => [[['_route' => 'prestation', '_controller' => 'App\\Controller\\PrestationController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/prestation/([^/]++)(*:27)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:62)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'reserver', '_controller' => 'App\\Controller\\PrestationController::reserver'], ['id'], null, null, false, true, null]],
        62 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
