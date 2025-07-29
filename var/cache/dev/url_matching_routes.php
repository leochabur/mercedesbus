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
        '/finanzas/metodo/cheque' => [[['_route' => 'app_finanzas_metodo_cheque_index', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/metodo/cheque/new' => [[['_route' => 'app_finanzas_metodo_cheque_new', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/metodo/efectivo' => [[['_route' => 'app_finanzas_metodo_efectivo_index', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finanzas/metodo/efectivo/new' => [[['_route' => 'app_finanzas_metodo_efectivo_new', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/finanzas/metodo/transferencia' => [[['_route' => 'app_finanzas_metodo_transferencia_index', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::index'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|articulo/concepto/([^/]++)(?'
                        .'|(*:250)'
                        .'|/edit(*:263)'
                        .'|(*:271)'
                    .')'
                    .'|e(?'
                        .'|ntidades/([^/]++)(?'
                            .'|(*:304)'
                            .'|/(?'
                                .'|comerciales/new(*:331)'
                                .'|edit(*:343)'
                            .')'
                            .'|(*:352)'
                        .')'
                        .'|mpresa/grupo/([^/]++)(?'
                            .'|(*:385)'
                            .'|/edit(*:398)'
                            .'|(*:406)'
                        .')'
                    .')'
                    .'|comprobante/(?'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|new(?:/([^/]++))?(*:463)'
                                .'|show(*:475)'
                                .'|edit(*:487)'
                            .')'
                            .'|(*:496)'
                        .')'
                        .'|proveedor(?'
                            .'|(*:517)'
                            .'|/(?'
                                .'|new(*:532)'
                                .'|([^/]++)(?'
                                    .'|(*:551)'
                                    .'|/edit(*:564)'
                                    .'|(*:572)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|item/comprobante/([^/]++)(?'
                        .'|(*:612)'
                        .'|/edit(*:625)'
                        .'|(*:633)'
                    .')'
                    .'|proveedor/([^/]++)(?'
                        .'|(*:663)'
                        .'|/edit(*:676)'
                        .'|(*:684)'
                    .')'
                .')'
                .'|/finanzas/(?'
                    .'|banco/([^/]++)(?'
                        .'|(*:724)'
                        .'|/edit(*:737)'
                        .'|(*:745)'
                    .')'
                    .'|cta(?'
                        .'|/cte/banco/([^/]++)(?'
                            .'|(*:782)'
                            .'|/edit(*:795)'
                            .'|(*:803)'
                        .')'
                        .'|cte/(?'
                            .'|delete/([^/]++)/movimiento(*:845)'
                            .'|([^/]++)(*:861)'
                            .'|new(*:872)'
                            .'|([^/]++)(?'
                                .'|(*:891)'
                                .'|/edit(*:904)'
                                .'|(*:912)'
                            .')'
                        .')'
                    .')'
                    .'|metodo/(?'
                        .'|cheque/([^/]++)(?'
                            .'|(*:951)'
                            .'|/edit(*:964)'
                            .'|(*:972)'
                        .')'
                        .'|efectivo/([^/]++)(?'
                            .'|(*:1001)'
                            .'|/edit(*:1015)'
                            .'|(*:1024)'
                        .')'
                        .'|transferencia/([^/]++)(?'
                            .'|(*:1059)'
                            .'|/edit(*:1073)'
                            .'|(*:1082)'
                        .')'
                    .')'
                    .'|recibo/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:1118)'
                            .'|edit(*:1131)'
                        .')'
                        .'|(*:1141)'
                    .')'
                .')'
                .'|/rrhh/(?'
                    .'|empleado/([^/]++)(?'
                        .'|(*:1181)'
                        .'|/edit(*:1195)'
                        .'|(*:1204)'
                    .')'
                    .'|puesto/trabajo/([^/]++)(?'
                        .'|(*:1240)'
                        .'|/edit(*:1254)'
                        .'|(*:1263)'
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
        304 => [[['_route' => 'app_administracion_cliente_index', '_controller' => 'App\\Controller\\Administracion\\ClienteController::index'], ['code'], ['GET' => 0], null, false, true, null]],
        331 => [[['_route' => 'app_administracion_cliente_new', '_controller' => 'App\\Controller\\Administracion\\ClienteController::new'], ['code'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'app_administracion_cliente_edit', '_controller' => 'App\\Controller\\Administracion\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        352 => [
            [['_route' => 'app_administracion_cliente_show', '_controller' => 'App\\Controller\\Administracion\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_administracion_cliente_delete', '_controller' => 'App\\Controller\\Administracion\\ClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        385 => [[['_route' => 'app_administracion_empresa_grupo_show', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'app_administracion_empresa_grupo_edit', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [[['_route' => 'app_administracion_empresa_grupo_delete', '_controller' => 'App\\Controller\\Administracion\\EmpresaGrupoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        463 => [[['_route' => 'app_administracion_comprobante_cliente_new', 'id' => 0, '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::new'], ['code', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        475 => [[['_route' => 'app_administracion_comprobante_cliente_show', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        487 => [[['_route' => 'app_administracion_comprobante_cliente_edit', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        496 => [[['_route' => 'app_administracion_comprobante_cliente_delete', '_controller' => 'App\\Controller\\Administracion\\ComprobanteClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        517 => [[['_route' => 'app_administracion_comprobante_proveedor_index', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::index'], [], ['GET' => 0], null, false, false, null]],
        532 => [[['_route' => 'app_administracion_comprobante_proveedor_new', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        551 => [[['_route' => 'app_administracion_comprobante_proveedor_show', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        564 => [[['_route' => 'app_administracion_comprobante_proveedor_edit', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        572 => [[['_route' => 'app_administracion_comprobante_proveedor_delete', '_controller' => 'App\\Controller\\Administracion\\ComprobanteProveedorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        612 => [[['_route' => 'app_administracion_item_comprobante_show', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        625 => [[['_route' => 'app_administracion_item_comprobante_edit', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        633 => [[['_route' => 'app_administracion_item_comprobante_delete', '_controller' => 'App\\Controller\\Administracion\\ItemComprobanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        663 => [[['_route' => 'app_administracion_proveedor_show', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        676 => [[['_route' => 'app_administracion_proveedor_edit', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        684 => [[['_route' => 'app_administracion_proveedor_delete', '_controller' => 'App\\Controller\\Administracion\\ProveedorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        724 => [[['_route' => 'app_finanzas_banco_show', '_controller' => 'App\\Controller\\Finanzas\\BancoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        737 => [[['_route' => 'app_finanzas_banco_edit', '_controller' => 'App\\Controller\\Finanzas\\BancoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        745 => [[['_route' => 'app_finanzas_banco_delete', '_controller' => 'App\\Controller\\Finanzas\\BancoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        782 => [[['_route' => 'app_finanzas_cta_cte_banco_show', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        795 => [[['_route' => 'app_finanzas_cta_cte_banco_edit', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        803 => [[['_route' => 'app_finanzas_cta_cte_banco_delete', '_controller' => 'App\\Controller\\Finanzas\\CtaCteBancoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        845 => [[['_route' => 'app_finanzas_cta_cte_delete_movimiento', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::eliminarMovimientoCuenta'], ['id'], ['DELETE' => 0], null, false, false, null]],
        861 => [[['_route' => 'app_finanzas_cta_cte_index', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::index'], ['t'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        872 => [[['_route' => 'app_finanzas_cta_cte_new', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        891 => [[['_route' => 'app_finanzas_cta_cte_show', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        904 => [[['_route' => 'app_finanzas_cta_cte_edit', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        912 => [[['_route' => 'app_finanzas_cta_cte_delete', '_controller' => 'App\\Controller\\Finanzas\\CtaCteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        951 => [[['_route' => 'app_finanzas_metodo_cheque_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        964 => [[['_route' => 'app_finanzas_metodo_cheque_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        972 => [[['_route' => 'app_finanzas_metodo_cheque_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoChequeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1001 => [[['_route' => 'app_finanzas_metodo_efectivo_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1015 => [[['_route' => 'app_finanzas_metodo_efectivo_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1024 => [[['_route' => 'app_finanzas_metodo_efectivo_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoEfectivoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1059 => [[['_route' => 'app_finanzas_metodo_transferencia_show', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1073 => [[['_route' => 'app_finanzas_metodo_transferencia_edit', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1082 => [[['_route' => 'app_finanzas_metodo_transferencia_delete', '_controller' => 'App\\Controller\\Finanzas\\MetodoTransferenciaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1118 => [[['_route' => 'app_finanzas_recibo_new', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::new'], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1131 => [[['_route' => 'app_finanzas_recibo_edit', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1141 => [
            [['_route' => 'app_finanzas_recibo_show', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_finanzas_recibo_delete', '_controller' => 'App\\Controller\\Finanzas\\ReciboController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1181 => [[['_route' => 'app_r_r_h_h_empleado_show', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1195 => [[['_route' => 'app_r_r_h_h_empleado_edit', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1204 => [[['_route' => 'app_r_r_h_h_empleado_delete', '_controller' => 'App\\Controller\\RRHH\\EmpleadoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1240 => [[['_route' => 'app_r_r_h_h_puesto_trabajo_show', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1254 => [[['_route' => 'app_r_r_h_h_puesto_trabajo_edit', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1263 => [
            [['_route' => 'app_r_r_h_h_puesto_trabajo_delete', '_controller' => 'App\\Controller\\RRHH\\PuestoTrabajoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
