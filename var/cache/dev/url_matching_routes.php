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
        '/finanzas/metodo/retencion' => [[['_route' => 'app_finanzas_metodo_retencion_index', '_controller' => 'App\\Controller\\Finanzas\\MetodoRetencionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/metodo/retencion/new' => [[['_route' => 'app_finanzas_metodo_retencion_new', '_controller' => 'App\\Controller\\Finanzas\\MetodoRetencionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/metodo/transferencia/new' => [[['_route' => 'app_finanzas_metodo_transferencia_new', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/recibo' => [[['_route' => 'app_finanzas_recibo_index', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/tipo/retencion' => [[['_route' => 'app_finanzas_tipo_retencion_index', '_controller' => 'App\\Controller\\Finanzas\\TipoRetencionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/tipo/retencion/new' => [[['_route' => 'app_finanzas_tipo_retencion_new', '_controller' => 'App\\Controller\\Finanzas\\TipoRetencionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                        .'|cliente(?'
                            .'|/([^/]++)(?'
                                .'|(*:264)'
                                .'|/edit(*:277)'
                                .'|(*:285)'
                            .')'
                            .'|get/([^/]++)/([^/]++)/importe(*:323)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:343)'
                            .'|/edit(*:356)'
                            .'|(*:364)'
                        .')'
                        .'|api/([^/]++)/articulos(*:395)'
                    .')'
                    .'|e(?'
                        .'|ntidades/([^/]++)(?'
                            .'|(*:428)'
                            .'|/(?'
                                .'|comerciales/new(*:455)'
                                .'|edit(*:467)'
                            .')'
                            .'|(*:476)'
                        .')'
                        .'|mpresa/grupo/([^/]++)(?'
                            .'|(*:509)'
                            .'|/edit(*:522)'
                            .'|(*:530)'
                        .')'
                    .')'
                    .'|comprobante/(?'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|new(?:/([^/]++))?(*:587)'
                                .'|show(*:599)'
                                .'|edit(*:611)'
                            .')'
                            .'|(*:620)'
                        .')'
                        .'|proveedor(?'
                            .'|(*:641)'
                            .'|/(?'
                                .'|new(*:656)'
                                .'|([^/]++)(?'
                                    .'|(*:675)'
                                    .'|/edit(*:688)'
                                    .'|(*:696)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|item/comprobante/([^/]++)(?'
                        .'|(*:736)'
                        .'|/edit(*:749)'
                        .'|(*:757)'
                    .')'
                    .'|proveedor/([^/]++)(?'
                        .'|(*:787)'
                        .'|/edit(*:800)'
                        .'|(*:808)'
                    .')'
                .')'
                .'|/finanzas/(?'
                    .'|banco/([^/]++)(?'
                        .'|(*:848)'
                        .'|/edit(*:861)'
                        .'|(*:869)'
                    .')'
                    .'|cta(?'
                        .'|/cte/banco/([^/]++)(?'
                            .'|(*:906)'
                            .'|/edit(*:919)'
                            .'|(*:927)'
                        .')'
                        .'|cte/(?'
                            .'|delete/([^/]++)/movimiento(*:969)'
                            .'|([^/]++)(*:985)'
                            .'|new(*:996)'
                            .'|([^/]++)(?'
                                .'|(*:1015)'
                                .'|/edit(*:1029)'
                                .'|(*:1038)'
                            .')'
                        .')'
                    .')'
                    .'|metodo/(?'
                        .'|cheque/(?'
                            .'|cartera/([^/]++)(?'
                                .'|(*:1089)'
                                .'|/edit(*:1103)'
                                .'|(*:1112)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:1133)'
                                .'|/edit(*:1147)'
                                .'|(*:1156)'
                            .')'
                            .'|propio/([^/]++)(?'
                                .'|(*:1184)'
                                .'|/edit(*:1198)'
                                .'|(*:1207)'
                            .')'
                        .')'
                        .'|efectivo/([^/]++)(?'
                            .'|(*:1238)'
                            .'|/edit(*:1252)'
                            .'|(*:1261)'
                        .')'
                        .'|retencion/([^/]++)(?'
                            .'|(*:1292)'
                            .'|/edit(*:1306)'
                            .'|(*:1315)'
                        .')'
                        .'|transferencia/([^/]++)(?'
                            .'|/(?'
                                .'|tipo(*:1358)'
                                .'|edit(*:1371)'
                            .')'
                            .'|(*:1381)'
                        .')'
                    .')'
                    .'|recibo/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:1417)'
                            .'|tipo/([^/]++)(*:1439)'
                            .'|edit(*:1452)'
                        .')'
                        .'|(*:1462)'
                    .')'
                    .'|tipo/retencion/([^/]++)(?'
                        .'|(*:1498)'
                        .'|/edit(*:1512)'
                        .'|(*:1521)'
                    .')'
                .')'
                .'|/rrhh/(?'
                    .'|empleado/([^/]++)(?'
                        .'|(*:1561)'
                        .'|/edit(*:1575)'
                        .'|(*:1584)'
                    .')'
                    .'|puesto/trabajo/([^/]++)(?'
                        .'|(*:1620)'
                        .'|/edit(*:1634)'
                        .'|(*:1643)'
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
        264 => [[['_route' => 'app_administracion_articulo_concepto_cliente_show', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        277 => [[['_route' => 'app_administracion_articulo_concepto_cliente_edit', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'app_administracion_articulo_concepto_cliente_delete', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_administracion_articulo_concepto_cliente_importe', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoClienteController::getImporte'], ['ente', 'art'], ['POST' => 0], null, false, false, null]],
        343 => [[['_route' => 'app_administracion_articulo_concepto_show', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'app_administracion_articulo_concepto_edit', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'app_administracion_articulo_concepto_delete', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        395 => [[['_route' => 'api_articulos', '_controller' => 'App\\Controller\\Administracion\\ArticuloConceptoController::getArticulos'], ['code'], ['GET' => 0], null, false, false, null]],
        428 => [[['_route' => 'app_administracion_cliente_index', '_controller' => 'App\\Controller\\Administracion\\ClienteController::index'], ['code'], ['GET' => 0], null, false, true, null]],
        455 => [[['_route' => 'app_administracion_cliente_new', '_controller' => 'App\\Controller\\Administracion\\ClienteController::new'], ['code'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        467 => [[['_route' => 'app_administracion_cliente_edit', '_controller' => 'App\\Controller\\Administracion\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        476 => [
            [['_route' => 'app_administracion_cliente_show', '_controller' => 'App\\Controller\\Administracion\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_administracion_cliente_delete', '_controller' => 'App\\Controller\\Administracion\\ClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        509 => [[['_route' => 'app_administracion_empresa_grupo_show', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'app_administracion_empresa_grupo_edit', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        530 => [[['_route' => 'app_administracion_empresa_grupo_delete', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        587 => [[['_route' => 'app_administracion_comprobante_cliente_new', 'id' => 0, '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::new'], ['code', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        599 => [[['_route' => 'app_administracion_comprobante_cliente_show', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        611 => [[['_route' => 'app_administracion_comprobante_cliente_edit', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        620 => [[['_route' => 'app_administracion_comprobante_cliente_delete', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        641 => [[['_route' => 'app_administracion_comprobante_proveedor_index', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::index'], [], ['GET' => 0], null, false, false, null]],
        656 => [[['_route' => 'app_administracion_comprobante_proveedor_new', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        675 => [[['_route' => 'app_administracion_comprobante_proveedor_show', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        688 => [[['_route' => 'app_administracion_comprobante_proveedor_edit', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        696 => [[['_route' => 'app_administracion_comprobante_proveedor_delete', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        736 => [[['_route' => 'app_administracion_item_comprobante_show', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        749 => [[['_route' => 'app_administracion_item_comprobante_edit', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        757 => [[['_route' => 'app_administracion_item_comprobante_delete', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        787 => [[['_route' => 'app_administracion_proveedor_show', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        800 => [[['_route' => 'app_administracion_proveedor_edit', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        808 => [[['_route' => 'app_administracion_proveedor_delete', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        848 => [[['_route' => 'app_finanzas_banco_show', '_controller' => 'App\\Controller\\Finanzas\\BancoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        861 => [[['_route' => 'app_finanzas_banco_edit', '_controller' => 'App\\Controller\\Finanzas\\BancoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        869 => [[['_route' => 'app_finanzas_banco_delete', '_controller' => 'App\\Controller\\Finanzas\\BancoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        906 => [[['_route' => 'app_finanzas_cta_cte_banco_show', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        919 => [[['_route' => 'app_finanzas_cta_cte_banco_edit', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        927 => [[['_route' => 'app_finanzas_cta_cte_banco_delete', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        969 => [[['_route' => 'app_finanzas_cta_cte_delete_movimiento', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::eliminarMovimientoCuenta'], ['id'], ['DELETE' => 0], null, false, false, null]],
        985 => [[['_route' => 'app_finanzas_cta_cte_index', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::index'], ['t'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        996 => [[['_route' => 'app_finanzas_cta_cte_new', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1015 => [[['_route' => 'app_finanzas_cta_cte_show', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1029 => [[['_route' => 'app_finanzas_cta_cte_edit', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1038 => [[['_route' => 'app_finanzas_cta_cte_delete', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1089 => [[['_route' => 'app_finanzas_metodo_cheque_cartera_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeCarteraController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1103 => [[['_route' => 'app_finanzas_metodo_cheque_cartera_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeCarteraController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1112 => [[['_route' => 'app_finanzas_metodo_cheque_cartera_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeCarteraController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1133 => [[['_route' => 'app_finanzas_metodo_cheque_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1147 => [[['_route' => 'app_finanzas_metodo_cheque_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1156 => [[['_route' => 'app_finanzas_metodo_cheque_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1184 => [[['_route' => 'app_finanzas_metodo_cheque_propio_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequePropioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1198 => [[['_route' => 'app_finanzas_metodo_cheque_propio_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequePropioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1207 => [[['_route' => 'app_finanzas_metodo_cheque_propio_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequePropioController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1238 => [[['_route' => 'app_finanzas_metodo_efectivo_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1252 => [[['_route' => 'app_finanzas_metodo_efectivo_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1261 => [[['_route' => 'app_finanzas_metodo_efectivo_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1292 => [[['_route' => 'app_finanzas_metodo_retencion_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoRetencionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1306 => [[['_route' => 'app_finanzas_metodo_retencion_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoRetencionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1315 => [[['_route' => 'app_finanzas_metodo_retencion_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoRetencionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1358 => [[['_route' => 'app_finanzas_metodo_transferencia_index', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::index'], ['t'], ['GET' => 0], null, false, false, null]],
        1371 => [[['_route' => 'app_finanzas_metodo_transferencia_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1381 => [
            [['_route' => 'app_finanzas_metodo_transferencia_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_finanzas_metodo_transferencia_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1417 => [[['_route' => 'app_finanzas_recibo_new', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::new'], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1439 => [[['_route' => 'app_finanzas_recibo_show', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::show'], ['id', 'tipo'], ['GET' => 0], null, false, true, null]],
        1452 => [[['_route' => 'app_finanzas_recibo_edit', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1462 => [[['_route' => 'app_finanzas_recibo_delete', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1498 => [[['_route' => 'app_finanzas_tipo_retencion_show', '_controller' => 'App\\Controller\\Finanzas\\TipoRetencionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1512 => [[['_route' => 'app_finanzas_tipo_retencion_edit', '_controller' => 'App\\Controller\\Finanzas\\TipoRetencionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1521 => [[['_route' => 'app_finanzas_tipo_retencion_delete', '_controller' => 'App\\Controller\\Finanzas\\TipoRetencionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1561 => [[['_route' => 'app_r_r_h_h_empleado_show', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1575 => [[['_route' => 'app_r_r_h_h_empleado_edit', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1584 => [[['_route' => 'app_r_r_h_h_empleado_delete', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1620 => [[['_route' => 'app_r_r_h_h_puesto_trabajo_show', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1634 => [[['_route' => 'app_r_r_h_h_puesto_trabajo_edit', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1643 => [
            [['_route' => 'app_r_r_h_h_puesto_trabajo_delete', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
