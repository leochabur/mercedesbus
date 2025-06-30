<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/administracion/articulo/concepto' => [[['_route' => 'app_administracion_articulo_concepto_index', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/articulo/concepto/new' => [[['_route' => 'app_administracion_articulo_concepto_new', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administracion/articulo/concepto/api/articulos' => [[['_route' => 'api_articulos', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::getArticulos'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/cliente' => [[['_route' => 'app_administracion_cliente_index', '_controller' => 'App\\Controller\\Administracion\\ClienteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/cliente/new' => [[['_route' => 'app_administracion_cliente_new', '_controller' => 'App\\Controller\\Administracion\\ClienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administracion/comprobante/cliente' => [[['_route' => 'app_administracion_comprobante_cliente_index', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/comprobante/cliente/new' => [[['_route' => 'app_administracion_comprobante_cliente_new', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administracion/item/comprobante' => [[['_route' => 'app_administracion_item_comprobante_index', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/item/comprobante/new' => [[['_route' => 'app_administracion_item_comprobante_new', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rrhh/empleado' => [[['_route' => 'app_r_r_h_h_empleado_index', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/rrhh/empleado/new' => [[['_route' => 'app_r_r_h_h_empleado_new', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rrhh/puesto/trabajo' => [[['_route' => 'app_r_r_h_h_puesto_trabajo_index', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/rrhh/puesto/trabajo/new' => [[['_route' => 'app_r_r_h_h_puesto_trabajo_new', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\SecurityController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/administracion/(?'
                    .'|articulo/concepto/([^/]++)(?'
                        .'|(*:250)'
                        .'|/edit(*:263)'
                        .'|(*:271)'
                    .')'
                    .'|c(?'
                        .'|liente/([^/]++)(?'
                            .'|(*:302)'
                            .'|/edit(*:315)'
                            .'|(*:323)'
                        .')'
                        .'|omprobante/cliente/([^/]++)(?'
                            .'|(*:362)'
                            .'|/edit(*:375)'
                            .'|(*:383)'
                        .')'
                    .')'
                    .'|item/comprobante/([^/]++)(?'
                        .'|(*:421)'
                        .'|/edit(*:434)'
                        .'|(*:442)'
                    .')'
                .')'
                .'|/finanzas/ctacte/(?'
                    .'|([^/]++)(*:480)'
                    .'|new(*:491)'
                    .'|([^/]++)(?'
                        .'|(*:510)'
                        .'|/edit(*:523)'
                        .'|(*:531)'
                    .')'
                .')'
                .'|/rrhh/(?'
                    .'|empleado/([^/]++)(?'
                        .'|(*:570)'
                        .'|/edit(*:583)'
                        .'|(*:591)'
                    .')'
                    .'|puesto/trabajo/([^/]++)(?'
                        .'|(*:626)'
                        .'|/edit(*:639)'
                        .'|(*:647)'
                    .')'
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
        250 => [[['_route' => 'app_administracion_articulo_concepto_show', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        263 => [[['_route' => 'app_administracion_articulo_concepto_edit', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        271 => [[['_route' => 'app_administracion_articulo_concepto_delete', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        302 => [[['_route' => 'app_administracion_cliente_show', '_controller' => 'App\\Controller\\Administracion\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'app_administracion_cliente_edit', '_controller' => 'App\\Controller\\Administracion\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        323 => [[['_route' => 'app_administracion_cliente_delete', '_controller' => 'App\\Controller\\Administracion\\ClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_administracion_comprobante_cliente_show', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        375 => [[['_route' => 'app_administracion_comprobante_cliente_edit', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        383 => [[['_route' => 'app_administracion_comprobante_cliente_delete', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        421 => [[['_route' => 'app_administracion_item_comprobante_show', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        434 => [[['_route' => 'app_administracion_item_comprobante_edit', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        442 => [[['_route' => 'app_administracion_item_comprobante_delete', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        480 => [[['_route' => 'app_finanzas_cta_cte_index', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::index'], ['t'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        491 => [[['_route' => 'app_finanzas_cta_cte_new', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        510 => [[['_route' => 'app_finanzas_cta_cte_show', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        523 => [[['_route' => 'app_finanzas_cta_cte_edit', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        531 => [[['_route' => 'app_finanzas_cta_cte_delete', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        570 => [[['_route' => 'app_r_r_h_h_empleado_show', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        583 => [[['_route' => 'app_r_r_h_h_empleado_edit', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        591 => [[['_route' => 'app_r_r_h_h_empleado_delete', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        626 => [[['_route' => 'app_r_r_h_h_puesto_trabajo_show', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        639 => [[['_route' => 'app_r_r_h_h_puesto_trabajo_edit', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        647 => [
            [['_route' => 'app_r_r_h_h_puesto_trabajo_delete', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
