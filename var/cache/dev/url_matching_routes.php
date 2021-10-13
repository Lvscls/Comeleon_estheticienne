<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/beautybae' => [[['_route' => 'beautybae', '_controller' => 'App\\Controller\\BeautybaeController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\BeautybaeController::accueil'], null, null, null, false, false, null]],
        '/avis' => [[['_route' => 'avis', '_controller' => 'App\\Controller\\BeautybaeController::avis'], null, null, null, false, false, null]],
        '/avis/new' => [[['_route' => 'avis_create', '_controller' => 'App\\Controller\\BeautybaeController::create'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
