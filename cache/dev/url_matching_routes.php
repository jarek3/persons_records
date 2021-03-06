<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/seznam-polozek' => [
            [['_route' => 'person_list', '_controller' => 'App\\Controller\\PersonController::list'], null, null, null, false, false, null],
            [['_route' => 'app_persons_records', '_controller' => 'App\\Controller\\PersonController::list'], null, null, null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/odstranit(?:/([^/]++))?(*:31)'
                .'|/editor(?:/([^/]++))?(*:59)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:97)'
                    .'|wdt/([^/]++)(*:116)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:162)'
                            .'|router(*:176)'
                            .'|exception(?'
                                .'|(*:196)'
                                .'|\\.css(*:209)'
                            .')'
                        .')'
                        .'|(*:219)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'remove_person', 'url' => null, '_controller' => 'App\\Controller\\PersonController::remove'], ['url'], null, null, false, true, null]],
        59 => [[['_route' => 'person_editor', 'id' => null, '_controller' => 'App\\Controller\\PersonController::editor'], ['id'], null, null, false, true, null]],
        97 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        116 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        162 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        176 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        196 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        209 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        219 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
