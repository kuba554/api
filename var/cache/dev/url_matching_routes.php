<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [[['_route' => '_logout_main'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/aktualizuj-produkty' => [[['_route' => 'app_update_products_command', '_controller' => 'App\\Controller\\Admin\\ProductController::updateProducts'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/([^/]++)/_components/([^/]++)(?:/([^/]++))?(*:86)'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:110)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:152)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:189)'
                                .'|router(*:203)'
                                .'|exception(?'
                                    .'|(*:223)'
                                    .'|\\.css(*:236)'
                                .')'
                            .')'
                            .'|(*:246)'
                        .')'
                    .')'
                .')'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)?(*:360)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/post(*:481)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/post/new(*:606)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/post/(\\d+)(*:733)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/post/(\\d+)/edit(*:865)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/post/([^/]++)/delete(*:1002)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/product(?'
                    .'|(*:1130)'
                .')'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/product/new(*:1260)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/product(*:1385)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/product/([^/]++)/edit(*:1524)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/product/([^/]++)(*:1658)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/admin/product/search(*:1790)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/api(*:1905)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/blog(*:2021)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/blog/rss\\.xml(*:2146)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/blog/page/([1-9]\\d{0,8})(*:2282)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/blog/posts/([^/]++)(*:2413)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/blog/comment/([^/]++)/new(*:2550)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/blog/search(*:2673)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/categories/tree(*:2800)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/categories/tree/new(*:2931)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/categories/tree/([^/]++)(*:3067)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/categories/tree/([^/]++)/edit(*:3208)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/categories/tree/([^/]++)(*:3344)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/test(*:3460)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/product/images(*:3586)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/product/images/new(*:3716)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/product/images/([^/]++)/show(*:3856)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/product/images/([^/]++)/edit(*:3996)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/product/images/([^/]++)(*:4131)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/product/stock(*:4256)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/product/stock/new(*:4385)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/product/stock/([^/]++)(*:4519)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/product/stock/([^/]++)/edit(*:4658)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/product/stock/([^/]++)(*:4792)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/login(*:4909)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/profile/edit(*:5033)'
                .'|/(ar|en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|sq|hr|zh_CN|bg|tr|lt|bs|sr_Cyrl|sr_Latn|eu|ne)/profile/change\\-password(*:5169)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        86 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_locale', '_live_component', '_live_action'], null, null, false, true, null]],
        110 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        152 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        189 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        203 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        223 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        236 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        246 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        360 => [[['_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], null, null, false, true, null]],
        481 => [[['_route' => 'admin_post_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        606 => [[['_route' => 'admin_post_new', '_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        733 => [[['_route' => 'admin_post_show', '_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        865 => [[['_route' => 'admin_post_edit', '_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1002 => [[['_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        1130 => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'app_product_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
        ],
        1260 => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\Admin\\ProductController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1385 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        1524 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit', '_locale' => 'en'], ['_locale', 'product_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1658 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        1790 => [[['_route' => 'app_product_search', '_controller' => 'App\\Controller\\Admin\\ProductController::search', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1905 => [[['_route' => 'app_api', '_controller' => 'App\\Controller\\ApiController::index', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2021 => [[['_route' => 'blog_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        2146 => [[['_route' => 'blog_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        2282 => [[['_route' => 'blog_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        2413 => [[['_route' => 'blog_post', '_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'en'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        2550 => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'en'], ['_locale', 'postSlug'], ['POST' => 0], null, false, false, null]],
        2673 => [[['_route' => 'blog_search', '_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        2800 => [[['_route' => 'app_categories_tree_index', '_controller' => 'App\\Controller\\CategoriesTreeController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        2931 => [[['_route' => 'app_categories_tree_new', '_controller' => 'App\\Controller\\CategoriesTreeController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3067 => [[['_route' => 'app_categories_tree_show', '_controller' => 'App\\Controller\\CategoriesTreeController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        3208 => [[['_route' => 'app_categories_tree_edit', '_controller' => 'App\\Controller\\CategoriesTreeController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3344 => [[['_route' => 'app_categories_tree_delete', '_controller' => 'App\\Controller\\CategoriesTreeController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        3460 => [[['_route' => 'test_route', '_controller' => 'App\\Controller\\DefaultController::test', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3586 => [[['_route' => 'app_product_images_index', '_controller' => 'App\\Controller\\ProductImagesController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        3716 => [[['_route' => 'app_product_images_new', '_controller' => 'App\\Controller\\ProductImagesController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3856 => [[['_route' => 'app_product_images_show', '_controller' => 'App\\Controller\\ProductImagesController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        3996 => [[['_route' => 'app_product_images_edit', '_controller' => 'App\\Controller\\ProductImagesController::edit', '_locale' => 'en'], ['_locale', 'product_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4131 => [[['_route' => 'app_product_images_delete', '_controller' => 'App\\Controller\\ProductImagesController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        4256 => [[['_route' => 'app_product_stock_index', '_controller' => 'App\\Controller\\ProductStockController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        4385 => [[['_route' => 'app_product_stock_new', '_controller' => 'App\\Controller\\ProductStockController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4519 => [[['_route' => 'app_product_stock_show', '_controller' => 'App\\Controller\\ProductStockController::show', '_locale' => 'en'], ['_locale', 'stock_id'], ['GET' => 0], null, false, true, null]],
        4658 => [[['_route' => 'app_product_stock_edit', '_controller' => 'App\\Controller\\ProductStockController::edit', '_locale' => 'en'], ['_locale', 'stock_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4792 => [[['_route' => 'app_product_stock_delete', '_controller' => 'App\\Controller\\ProductStockController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        4909 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5033 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5169 => [
            [['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
