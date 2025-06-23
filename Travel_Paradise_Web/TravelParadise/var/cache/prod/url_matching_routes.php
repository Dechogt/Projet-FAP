<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, true, false, null]],
        '/admin/guides' => [[['_route' => 'admin_guides', '_controller' => 'App\\Controller\\AdminController::guides'], null, null, null, false, false, null]],
        '/admin/visites' => [[['_route' => 'admin_visites', '_controller' => 'App\\Controller\\AdminController::visites'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::users'], null, null, null, false, false, null]],
        '/guide/touristique' => [[['_route' => 'app_guide_touristique_index', '_controller' => 'App\\Controller\\GuideTouristiqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/guide/touristique/new' => [[['_route' => 'app_guide_touristique_new', '_controller' => 'App\\Controller\\GuideTouristiqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/stats' => [[['_route' => 'app_stats', '_controller' => 'App\\Controller\\StatsController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/visite' => [[['_route' => 'app_visite_index', '_controller' => 'App\\Controller\\VisiteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/visite/new' => [[['_route' => 'app_visite_new', '_controller' => 'App\\Controller\\VisiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/visiteur' => [[['_route' => 'app_visiteur_index', '_controller' => 'App\\Controller\\VisiteurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/visiteur/new' => [[['_route' => 'app_visiteur_new', '_controller' => 'App\\Controller\\VisiteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/guide/touristique/([^/]++)(?'
                    .'|(*:37)'
                    .'|/edit(*:49)'
                    .'|(*:56)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:81)'
                    .'|/edit(*:93)'
                    .'|(*:100)'
                .')'
                .'|/visite(?'
                    .'|/([^/]++)(?'
                        .'|(*:131)'
                        .'|/edit(*:144)'
                        .'|(*:152)'
                    .')'
                    .'|ur/([^/]++)(?'
                        .'|(*:175)'
                        .'|/edit(*:188)'
                        .'|(*:196)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'app_guide_touristique_show', '_controller' => 'App\\Controller\\GuideTouristiqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        49 => [[['_route' => 'app_guide_touristique_edit', '_controller' => 'App\\Controller\\GuideTouristiqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        56 => [[['_route' => 'app_guide_touristique_delete', '_controller' => 'App\\Controller\\GuideTouristiqueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        81 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        131 => [[['_route' => 'app_visite_show', '_controller' => 'App\\Controller\\VisiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        144 => [[['_route' => 'app_visite_edit', '_controller' => 'App\\Controller\\VisiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        152 => [[['_route' => 'app_visite_delete', '_controller' => 'App\\Controller\\VisiteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        175 => [[['_route' => 'app_visiteur_show', '_controller' => 'App\\Controller\\VisiteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        188 => [[['_route' => 'app_visiteur_edit', '_controller' => 'App\\Controller\\VisiteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        196 => [
            [['_route' => 'app_visiteur_delete', '_controller' => 'App\\Controller\\VisiteurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
