<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, true, false, null]],
        '/admin/guides' => [[['_route' => 'admin_guides', '_controller' => 'App\\Controller\\AdminController::guides'], null, null, null, false, false, null]],
        '/admin/visites' => [[['_route' => 'admin_visites', '_controller' => 'App\\Controller\\AdminController::visites'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::users'], null, null, null, false, false, null]],
        '/admin/statistiques' => [[['_route' => 'admin_statistics', '_controller' => 'App\\Controller\\AdminController::statistics'], null, null, null, false, false, null]],
        '/api/guide/visites' => [[['_route' => 'api_guide_visites', '_controller' => 'App\\Controller\\ApiVisiteController::getGuideVisites'], null, ['GET' => 0], null, false, false, null]],
        '/admin/guide_touristique' => [[['_route' => 'app_guide_touristique_index', '_controller' => 'App\\Controller\\GuideTouristiqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/guide_touristique/new' => [[['_route' => 'app_guide_touristique_new', '_controller' => 'App\\Controller\\GuideTouristiqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/visite' => [[['_route' => 'app_visite_index', '_controller' => 'App\\Controller\\VisiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/visite/new' => [[['_route' => 'app_visite_new', '_controller' => 'App\\Controller\\VisiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/visiteur' => [[['_route' => 'app_visiteur_index', '_controller' => 'App\\Controller\\VisiteurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/visiteur/new' => [[['_route' => 'app_visiteur_new', '_controller' => 'App\\Controller\\VisiteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login', '_controller' => 'lexik_jwt_authentication.controller.authentication'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|pi/guide/visites/([^/]++)(?'
                        .'|(*:235)'
                        .'|/(?'
                            .'|checkin(*:254)'
                            .'|statut(*:268)'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|guide_touristique/([^/]++)(?'
                            .'|(*:315)'
                            .'|/edit(*:328)'
                            .'|(*:336)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:361)'
                            .'|/edit(*:374)'
                            .'|(*:382)'
                        .')'
                        .'|visite/([^/]++)(?'
                            .'|(*:409)'
                            .'|/edit(*:422)'
                            .'|(*:430)'
                        .')'
                    .')'
                .')'
                .'|/visiteur/([^/]++)(?'
                    .'|(*:462)'
                    .'|/edit(*:475)'
                    .'|(*:483)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        235 => [[['_route' => 'api_guide_visite_show', '_controller' => 'App\\Controller\\ApiVisiteController::getVisiteById'], ['id'], ['GET' => 0, 'OPTIONS' => 1], null, false, true, null]],
        254 => [[['_route' => 'api_visite_checkin', '_controller' => 'App\\Controller\\ApiVisiteController::updateVisiteCheckin'], ['id'], ['POST' => 0, 'OPTIONS' => 1], null, false, false, null]],
        268 => [[['_route' => 'api_guide_visite_update_statut', '_controller' => 'App\\Controller\\ApiVisiteController::updateVisiteStatut'], ['id'], ['PATCH' => 0], null, false, false, null]],
        315 => [[['_route' => 'app_guide_touristique_show', '_controller' => 'App\\Controller\\GuideTouristiqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        328 => [[['_route' => 'app_guide_touristique_edit', '_controller' => 'App\\Controller\\GuideTouristiqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        336 => [[['_route' => 'app_guide_touristique_delete', '_controller' => 'App\\Controller\\GuideTouristiqueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        361 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        374 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        382 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        409 => [[['_route' => 'app_visite_show', '_controller' => 'App\\Controller\\VisiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        422 => [[['_route' => 'app_visite_edit', '_controller' => 'App\\Controller\\VisiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        430 => [[['_route' => 'app_visite_delete', '_controller' => 'App\\Controller\\VisiteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        462 => [[['_route' => 'app_visiteur_show', '_controller' => 'App\\Controller\\VisiteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        475 => [[['_route' => 'app_visiteur_edit', '_controller' => 'App\\Controller\\VisiteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        483 => [
            [['_route' => 'app_visiteur_delete', '_controller' => 'App\\Controller\\VisiteurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
