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
        '/administracion/articulo/concepto/cliente' => [[['_route' => 'app_administracion_articulo_concepto_cliente_index', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoClienteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/articulo/concepto/cliente/new' => [[['_route' => 'app_administracion_articulo_concepto_cliente_new', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoClienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administracion/articulo/concepto' => [[['_route' => 'app_administracion_articulo_concepto_index', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/articulo/concepto/new' => [[['_route' => 'app_administracion_articulo_concepto_new', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administracion/articulo/concepto/api/articulos' => [[['_route' => 'api_articulos', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::getArticulos'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/comprobante' => [[['_route' => 'app_administracion_comprobante_cliente_index', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/empresa/grupo' => [[['_route' => 'app_administracion_empresa_grupo_index', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/empresa/grupo/new' => [[['_route' => 'app_administracion_empresa_grupo_new', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administracion/item/comprobante' => [[['_route' => 'app_administracion_item_comprobante_index', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/item/comprobante/new' => [[['_route' => 'app_administracion_item_comprobante_new', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administracion/proveedor' => [[['_route' => 'app_administracion_proveedor_index', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administracion/proveedor/new' => [[['_route' => 'app_administracion_proveedor_new', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/banco' => [[['_route' => 'app_finanzas_banco_index', '_controller' => 'App\\Controller\\Finanzas\\BancoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/banco/new' => [[['_route' => 'app_finanzas_banco_new', '_controller' => 'App\\Controller\\Finanzas\\BancoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/cta/cte/banco' => [[['_route' => 'app_finanzas_cta_cte_banco_index', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/cta/cte/banco/new' => [[['_route' => 'app_finanzas_cta_cte_banco_new', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/metodo/cheque/cartera' => [[['_route' => 'app_finanzas_metodo_cheque_cartera_index', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeCarteraController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/metodo/cheque/cartera/new' => [[['_route' => 'app_finanzas_metodo_cheque_cartera_new', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeCarteraController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/metodo/cheque' => [[['_route' => 'app_finanzas_metodo_cheque_index', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/metodo/cheque/new' => [[['_route' => 'app_finanzas_metodo_cheque_new', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/metodo/cheque/propio/lista' => [[['_route' => 'app_finanzas_metodo_cheque_propio_index', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequePropioController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/metodo/cheque/propio/new' => [[['_route' => 'app_finanzas_metodo_cheque_propio_new', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequePropioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/metodo/efectivo' => [[['_route' => 'app_finanzas_metodo_efectivo_index', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/metodo/efectivo/new' => [[['_route' => 'app_finanzas_metodo_efectivo_new', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/metodo/transferencia/new' => [[['_route' => 'app_finanzas_metodo_transferencia_new', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/recibo' => [[['_route' => 'app_finanzas_recibo_index', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::index'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|articulo/concepto/(?'
                        .'|cliente/([^/]++)(?'
                            .'|(*:261)'
                            .'|/edit(*:274)'
                            .'|(*:282)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:302)'
                            .'|/edit(*:315)'
                            .'|(*:323)'
                        .')'
                    .')'
                    .'|e(?'
                        .'|ntidades/([^/]++)(?'
                            .'|(*:357)'
                            .'|/(?'
                                .'|comerciales/new(*:384)'
                                .'|edit(*:396)'
                            .')'
                            .'|(*:405)'
                        .')'
                        .'|mpresa/grupo/([^/]++)(?'
                            .'|(*:438)'
                            .'|/edit(*:451)'
                            .'|(*:459)'
                        .')'
                    .')'
                    .'|comprobante/(?'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|new(?:/([^/]++))?(*:516)'
                                .'|show(*:528)'
                                .'|edit(*:540)'
                            .')'
                            .'|(*:549)'
                        .')'
                        .'|proveedor(?'
                            .'|(*:570)'
                            .'|/(?'
                                .'|new(*:585)'
                                .'|([^/]++)(?'
                                    .'|(*:604)'
                                    .'|/edit(*:617)'
                                    .'|(*:625)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|item/comprobante/([^/]++)(?'
                        .'|(*:665)'
                        .'|/edit(*:678)'
                        .'|(*:686)'
                    .')'
                    .'|proveedor/([^/]++)(?'
                        .'|(*:716)'
                        .'|/edit(*:729)'
                        .'|(*:737)'
                    .')'
                .')'
                .'|/finanzas/(?'
                    .'|banco/([^/]++)(?'
                        .'|(*:777)'
                        .'|/edit(*:790)'
                        .'|(*:798)'
                    .')'
                    .'|cta(?'
                        .'|/cte/banco/([^/]++)(?'
                            .'|(*:835)'
                            .'|/edit(*:848)'
                            .'|(*:856)'
                        .')'
                        .'|cte/(?'
                            .'|delete/([^/]++)/movimiento(*:898)'
                            .'|([^/]++)(*:914)'
                            .'|new(*:925)'
                            .'|([^/]++)(?'
                                .'|(*:944)'
                                .'|/edit(*:957)'
                                .'|(*:965)'
                            .')'
                        .')'
                    .')'
                    .'|metodo/(?'
                        .'|cheque/(?'
                            .'|cartera/([^/]++)(?'
                                .'|(*:1015)'
                                .'|/edit(*:1029)'
                                .'|(*:1038)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:1059)'
                                .'|/edit(*:1073)'
                                .'|(*:1082)'
                            .')'
                            .'|propio/([^/]++)(?'
                                .'|(*:1110)'
                                .'|/edit(*:1124)'
                                .'|(*:1133)'
                            .')'
                        .')'
                        .'|efectivo/([^/]++)(?'
                            .'|(*:1164)'
                            .'|/edit(*:1178)'
                            .'|(*:1187)'
                        .')'
                        .'|transferencia/([^/]++)(?'
                            .'|/(?'
                                .'|tipo(*:1230)'
                                .'|edit(*:1243)'
                            .')'
                            .'|(*:1253)'
                        .')'
                    .')'
                    .'|recibo/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:1289)'
                            .'|tipo/([^/]++)(*:1311)'
                            .'|edit(*:1324)'
                        .')'
                        .'|(*:1334)'
                    .')'
                .')'
                .'|/rrhh/(?'
                    .'|empleado/([^/]++)(?'
                        .'|(*:1374)'
                        .'|/edit(*:1388)'
                        .'|(*:1397)'
                    .')'
                    .'|puesto/trabajo/([^/]++)(?'
                        .'|(*:1433)'
                        .'|/edit(*:1447)'
                        .'|(*:1456)'
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
        261 => [[['_route' => 'app_administracion_articulo_concepto_cliente_show', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_administracion_articulo_concepto_cliente_edit', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        282 => [[['_route' => 'app_administracion_articulo_concepto_cliente_delete', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        302 => [[['_route' => 'app_administracion_articulo_concepto_show', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'app_administracion_articulo_concepto_edit', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        323 => [[['_route' => 'app_administracion_articulo_concepto_delete', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        357 => [[['_route' => 'app_administracion_cliente_index', '_controller' => 'App\\Controller\\Administracion\\ClienteController::index'], ['code'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'app_administracion_cliente_new', '_controller' => 'App\\Controller\\Administracion\\ClienteController::new'], ['code'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        396 => [[['_route' => 'app_administracion_cliente_edit', '_controller' => 'App\\Controller\\Administracion\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        405 => [
            [['_route' => 'app_administracion_cliente_show', '_controller' => 'App\\Controller\\Administracion\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_administracion_cliente_delete', '_controller' => 'App\\Controller\\Administracion\\ClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        438 => [[['_route' => 'app_administracion_empresa_grupo_show', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        451 => [[['_route' => 'app_administracion_empresa_grupo_edit', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        459 => [[['_route' => 'app_administracion_empresa_grupo_delete', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        516 => [[['_route' => 'app_administracion_comprobante_cliente_new', 'id' => 0, '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::new'], ['code', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        528 => [[['_route' => 'app_administracion_comprobante_cliente_show', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        540 => [[['_route' => 'app_administracion_comprobante_cliente_edit', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        549 => [[['_route' => 'app_administracion_comprobante_cliente_delete', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        570 => [[['_route' => 'app_administracion_comprobante_proveedor_index', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::index'], [], ['GET' => 0], null, false, false, null]],
        585 => [[['_route' => 'app_administracion_comprobante_proveedor_new', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        604 => [[['_route' => 'app_administracion_comprobante_proveedor_show', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        617 => [[['_route' => 'app_administracion_comprobante_proveedor_edit', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        625 => [[['_route' => 'app_administracion_comprobante_proveedor_delete', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        665 => [[['_route' => 'app_administracion_item_comprobante_show', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        678 => [[['_route' => 'app_administracion_item_comprobante_edit', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        686 => [[['_route' => 'app_administracion_item_comprobante_delete', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        716 => [[['_route' => 'app_administracion_proveedor_show', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        729 => [[['_route' => 'app_administracion_proveedor_edit', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        737 => [[['_route' => 'app_administracion_proveedor_delete', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        777 => [[['_route' => 'app_finanzas_banco_show', '_controller' => 'App\\Controller\\Finanzas\\BancoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        790 => [[['_route' => 'app_finanzas_banco_edit', '_controller' => 'App\\Controller\\Finanzas\\BancoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        798 => [[['_route' => 'app_finanzas_banco_delete', '_controller' => 'App\\Controller\\Finanzas\\BancoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        835 => [[['_route' => 'app_finanzas_cta_cte_banco_show', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        848 => [[['_route' => 'app_finanzas_cta_cte_banco_edit', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        856 => [[['_route' => 'app_finanzas_cta_cte_banco_delete', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        898 => [[['_route' => 'app_finanzas_cta_cte_delete_movimiento', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::eliminarMovimientoCuenta'], ['id'], ['DELETE' => 0], null, false, false, null]],
        914 => [[['_route' => 'app_finanzas_cta_cte_index', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::index'], ['t'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        925 => [[['_route' => 'app_finanzas_cta_cte_new', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        944 => [[['_route' => 'app_finanzas_cta_cte_show', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        957 => [[['_route' => 'app_finanzas_cta_cte_edit', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        965 => [[['_route' => 'app_finanzas_cta_cte_delete', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1015 => [[['_route' => 'app_finanzas_metodo_cheque_cartera_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeCarteraController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1029 => [[['_route' => 'app_finanzas_metodo_cheque_cartera_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeCarteraController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1038 => [[['_route' => 'app_finanzas_metodo_cheque_cartera_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeCarteraController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1059 => [[['_route' => 'app_finanzas_metodo_cheque_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1073 => [[['_route' => 'app_finanzas_metodo_cheque_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1082 => [[['_route' => 'app_finanzas_metodo_cheque_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1110 => [[['_route' => 'app_finanzas_metodo_cheque_propio_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequePropioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1124 => [[['_route' => 'app_finanzas_metodo_cheque_propio_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequePropioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1133 => [[['_route' => 'app_finanzas_metodo_cheque_propio_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequePropioController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1164 => [[['_route' => 'app_finanzas_metodo_efectivo_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1178 => [[['_route' => 'app_finanzas_metodo_efectivo_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1187 => [[['_route' => 'app_finanzas_metodo_efectivo_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1230 => [[['_route' => 'app_finanzas_metodo_transferencia_index', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::index'], ['t'], ['GET' => 0], null, false, false, null]],
        1243 => [[['_route' => 'app_finanzas_metodo_transferencia_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1253 => [
            [['_route' => 'app_finanzas_metodo_transferencia_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_finanzas_metodo_transferencia_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1289 => [[['_route' => 'app_finanzas_recibo_new', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::new'], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1311 => [[['_route' => 'app_finanzas_recibo_show', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::show'], ['id', 'tipo'], ['GET' => 0], null, false, true, null]],
        1324 => [[['_route' => 'app_finanzas_recibo_edit', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1334 => [[['_route' => 'app_finanzas_recibo_delete', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1374 => [[['_route' => 'app_r_r_h_h_empleado_show', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1388 => [[['_route' => 'app_r_r_h_h_empleado_edit', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1397 => [[['_route' => 'app_r_r_h_h_empleado_delete', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1433 => [[['_route' => 'app_r_r_h_h_puesto_trabajo_show', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1447 => [[['_route' => 'app_r_r_h_h_puesto_trabajo_edit', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1456 => [
            [['_route' => 'app_r_r_h_h_puesto_trabajo_delete', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
