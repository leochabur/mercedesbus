<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* navBar.html.twig */
class __TwigTemplate_c49c39519128690711fc591aac3348b9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'title_block' => [$this, 'block_title_block'],
            'content_user' => [$this, 'block_content_user'],
            'javascripts_footer' => [$this, 'block_javascripts_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "navBar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "        ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "



        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        yield "<div class=\"wrapper d-flex align-items-stretch\">
            <nav id=\"sidebar\">
                <div class=\"p-4 pt-5\">


                        <img class=\"img logo rounded mb-5\" src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\"/>
                        
                        ";
        // line 22
        $context["filter"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "session", [], "any", false, false, false, 22), "get", ["strname"], "method", false, false, false, 22);
        // line 23
        yield "                        

                        <ul class=\"nav navbar-nav ml-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-222\" data-toggle=\"dropdown\"
                              aria-haspopup=\"true\" aria-expanded=\"false\">
                              ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right dropdown-default text-light bg-dark\"
                              aria-labelledby=\"navbarDropdownMenuLink-222\">
                              ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 33), "estructuras", [], "any", true, true, false, 33)) {
            // line 34
            yield "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "estructuras", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 35
                yield "                                    <a style=\"font-size: 12px;\" class=\"dropdown-item text-light bg-dark px-2\" 
                                       href=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_user_change_str", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["e"], "html", null, true);
                yield "</a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                            ";
        }
        // line 39
        yield "                            </div>
                        </li>
              </ul>

                        <hr>
            <ul class=\"list-unstyled components mb-5\">
                  <li>
                        <a href=\"#modulo_rrhh\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Modulo RRHH</a>
                        <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh\">
                            <li>      


                                <a href=\"#modulo_rrhh_empleadores\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Personal</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_empleadores\">
                                        <li>
                                            <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_empleado_index");
        yield "\" class=\"pl-4\">Listado</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_vtos_tipo_vencimiento_conductor_index");
        yield "\" class=\"pl-4\">Configurar Vtos.</a>
                                        </li>
                                    </ul>

                                <a href=\"#modulo_rrhh_vacaciones_personal\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Vacaciones</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_vacaciones_personal\">
                                        <li>
                                            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_gestion_control_movimiento_personal_index");
        yield "\" class=\"pl-4\">Gestionar</a>

                                            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_gestion_control_movimiento_personal_listado");
        yield "\" class=\"pl-4\">Listado</a>

                                        </li>
                                    </ul>

   

                                <a href=\"#modulo_rrhh_admin_novedades\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Novedades</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_admin_novedades\">
                                        <li>
                                            <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_novedades_novedad_index");
        yield "\" class=\"pl-4\">Listado</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_novedades_tipo_novedad_index");
        yield "\" class=\"pl-4\">Tipos Novedades</a>
                                        </li>
                                    </ul>

                                <a href=\"#module_rr_certificados_medicos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Certificados Medicos</a>
                                    <ul class=\"collapse list-unstyled\" id=\"module_rr_certificados_medicos\">
                                        <li>
                                            <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_cert_med_certificado_medico_index");
        yield "\" class=\"pl-4\">Administrar</a>
                                        </li>
                                        <li>

                                        <a href=\"#modulo_rrhh_cert_medicos_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_cert_medicos_catalogos\">
                                                <li>
                                                    <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_cert_med_centro_asistencial_index");
        yield "\" class=\"pl-4\">Centros Asistenciales</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_cert_med_diagnostico_index");
        yield "\" class=\"pl-4\">Diagnosticos</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_cert_med_especialidad_index");
        yield "\" class=\"pl-4\">Especialidades</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_cert_med_medico_responsable_index");
        yield "\" class=\"pl-4\">Medicos</a>
                                                </li>
                                            </ul>



                                        </li>
                                    </ul>

                                <a href=\"#modulo_rrhh_pedidos_explicacion\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Pedidos Explicacion</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_pedidos_explicacion\">
                                        <li>
                                            <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sanciones_pedido_explicacion_index");
        yield "\" class=\"pl-4\">Gestionar</a>
                                        </li>
                                    </ul>

                                <a href=\"#modulo_rrhh_tipos_vtos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Vencimientos</a>

                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_tipos_vtos\">
                                        <li>
                                            <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_vtos_tipo_vencimiento_index");
        yield "\" class=\"pl-4\">Administrar</a>
                                        </li>
                                    </ul>


                                <a href=\"#modulo_rrhh_bd\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Catalogos</a>

                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_bd\">
                                        <li>
                                            <a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_utils_cargo_index");
        yield "\" class=\"pl-4\">Puestos</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_empleador_index");
        yield "\" class=\"pl-4\">Empleadores</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_utils_sector_index");
        yield "\" class=\"pl-4\">Sectores</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_utils_turno_index");
        yield "\" class=\"pl-4\">Turnos</a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                  </li>

                  <li>
                        <a href=\"#modulo_seguridad_vial\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Modulo Seg. Vial</a>
                        <ul class=\"collapse list-unstyled\" id=\"modulo_seguridad_vial\">

                            <li>      
                                <a href=\"#modulo_seguridad_vial_unidades\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Unidades</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_seguridad_vial_unidades\">

                                        <li>
                                            <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_unidad_index");
        yield "\" class=\"pl-4\">Administrar</a>
                                        </li>

                                        <li>

                                        <a href=\"#modulo_seg_vial_unidades_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_seg_vial_unidades_catalogos\">
                                                <li>
                                                    <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_calidad_index");
        yield "\" class=\"pl-4\">Calidad Unidad</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_marca_a_a_index");
        yield "\" class=\"pl-4\">Marca A.A.</a>
                                                </li>   
                                                <li>
                                                    <a href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_marca_carroceria_index");
        yield "\" class=\"pl-4\">Marca Carroceria</a>
                                                </li>                                                                                                                                 
                                                <li>
                                                    <a href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_marca_chasis_index");
        yield "\" class=\"pl-4\">Marca Chasis</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_marca_motor_index");
        yield "\" class=\"pl-4\">Marca Motor</a>
                                                </li>         
                                                <li>
                                                    <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_modelo_carroceria_index");
        yield "\" class=\"pl-4\">Modelo Carroceria</a>
                                                </li>       
                                                <li>
                                                    <a href=\"";
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_modelo_chasis_index");
        yield "\" class=\"pl-4\">Modelo Chasis</a>
                                                </li>          
                                                <li>
                                                    <a href=\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_servicio_unidad_index");
        yield "\" class=\"pl-4\">Servicios Unidad</a>
                                                </li>     
                                                <li>
                                                    <a href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_tipo_motor_index");
        yield "\" class=\"pl-4\">Tipo Motor</a>
                                                </li>           
                                                <li>
                                                    <a href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_tipo_unidad_index");
        yield "\" class=\"pl-4\">Tipo Unidad</a>
                                                </li>   
                                                <li>
                                                    <a href=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_catalogos_ubicacion_motor_index");
        yield "\" class=\"pl-4\">Ubicacion Motor</a>
                                                </li>                                                                                                    
                                            </ul>



                                        </li>
                                    </ul>
                            </li>
                            <li>      
                                <a href=\"#modulo_seguridad_vial_siniestros\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Siniestros</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_seguridad_vial_siniestros\">

                                                                                <li>
                                            <a href=\"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_siniestro_index");
        yield "\" class=\"pl-4\">Administrar</a>
                                        </li>

                                        <li>

                                        <a href=\"#modulo_seg_vial_sucesos_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_seg_vial_sucesos_catalogos\">
                                                <li>
                                                    <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_catalogos_configuracion_calzada_index");
        yield "\" class=\"pl-4\">Configuracion de Calzada</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_catalogos_estado_rodadura_index");
        yield "\" class=\"pl-4\">Estado de Rodadura</a>
                                                </li>   
                                                <li>
                                                    <a href=\"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_catalogos_objeto_colision_index");
        yield "\" class=\"pl-4\">Objeto de Colision</a>
                                                </li>                                                                                                                                 
                                                <li>
                                                    <a href=\"";
        // line 225
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_catalogos_tipo_banquina_index");
        yield "\" class=\"pl-4\">Tipos Banquina</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_catalogos_tipo_calzada_index");
        yield "\" class=\"pl-4\">Tipo de Calzada</a>
                                                </li>         
                                                <li>
                                                    <a href=\"";
        // line 231
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_catalogos_tipo_clima_index");
        yield "\" class=\"pl-4\">Tipo de Clima</a>
                                                </li>       
                                                <li>
                                                    <a href=\"";
        // line 234
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_catalogos_tipo_colision_index");
        yield "\" class=\"pl-4\">Tipo de Colision</a>
                                                </li>          
                                                <li>
                                                    <a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_catalogos_tipo_iluminacion_index");
        yield "\" class=\"pl-4\">Tipo de Iluminacion</a>
                                                </li>     
                                                <li>
                                                    <a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_estado_lesion_index");
        yield "\" class=\"pl-4\">Tipo de Lesion</a>
                                                </li>           
                                                <li>
                                                    <a href=\"";
        // line 243
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_sucesos_catalogos_tipo_visibilidad_index");
        yield "\" class=\"pl-4\">Tipo de Visibilidad</a>
                                                </li>                                                                                                     
                                            </ul>



                                        </li>
                                    </ul>
                            </li>
                            <li>      
                                <a href=\"#modulo_seg_vial_vtos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Vencimientos</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_seg_vial_vtos\">

                                        <li>
                                            <a href=\"";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_vtos_seguro_automotor_index");
        yield "\" class=\"pl-4\">Administrar Seguros</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_vtos_verificacion_tecnica_index");
        yield "\" class=\"pl-4\">Administrar Verifi. Tecnicas</a>
                                        </li>
                                        <li>

                                        <a href=\"#modulo_seg_vial_vtos_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_seg_vial_vtos_catalogos\">
                                                <li>
                                                    <a href=\"";
        // line 267
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_vtos_compania_seguro_index");
        yield "\" class=\"pl-4\">Compañias Seguro</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_vtos_cobertura_seguro_automotor_index");
        yield "\" class=\"pl-4\">Cobertura Seguro</a>
                                                </li>                                                                                                
                                                                                                <li>
                                                    <a href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_vtos_tipo_destino_seguro_automotor_index");
        yield "\" class=\"pl-4\">Tipo Destino</a>
                                                </li>        
                                                <li>
                                                    <a href=\"";
        // line 276
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seg_vial_vtos_planta_verificadora_index");
        yield "\" class=\"pl-4\">Plantas Verificadoras</a>
                                                </li> 
                                            </ul>



                                        </li>
                                    </ul>
                            </li>
                        </ul>
                  </li>



                  <li>
                        <a href=\"#modulo_trafico\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Modulo Trafico</a>
                        <ul class=\"collapse list-unstyled\" id=\"modulo_trafico\">
                            <li>      
                                <a href=\"#modulo_trafico_ordenes_trabajo\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Ordenes Trabajo</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_ordenes_trabajo\">
                                        <li>
                                            <a href=\"";
        // line 297
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_orden_trabajo_index");
        yield "\" class=\"pl-4\">Operacion</a>
                                            <a href=\"";
        // line 298
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_unidad_trabajo_informe");
        yield "\" class=\"pl-4\">Diagramacion</a>
                                            
                                        </li>
                                        <li>
                                        <a href=\"#modulo_trafico_diagramas_diarios\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Diagrama Diario</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_diagramas_diarios\">
                                                <li>
                                                    <a href=\"";
        // line 305
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_diagrama_diagrama_trabajo_index");
        yield "\" class=\"pl-4 ml-2\">Diagramas Trabajo</a>
                                                    <a href=\"";
        // line 306
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_diagrama_copia_diagrama_trabajo_index");
        yield "\" class=\"pl-4 ml-2\"> Copiar Diagrama</a>


                                                </li>
                                            </ul>

                                        <a href=\"#modulo_trafico_catalogos_servicios\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_catalogos_servicios\">
                                                <li>
                                                    <a href=\"";
        // line 315
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_ciudad_index");
        yield "\" class=\"pl-4\">Ciudades</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 318
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_diagrama_fase_diaria_index");
        yield "\" class=\"pl-4\">Fase Diaria Servicio</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 321
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_diagrama_modalidad_servicio_index");
        yield "\" class=\"pl-4\">Modalidad Servicio</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 324
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_pais_index");
        yield "\" class=\"pl-4\">Paises</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 327
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_provincia_index");
        yield "\" class=\"pl-4\">Provincias</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 330
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_punto_inicial_final_index");
        yield "\" class=\"pl-4\">Puntos Inicio Fin</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 333
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_diagrama_tipo_servicio_index");
        yield "\" class=\"pl-4\">Tipo Servicio</a>
                                                </li>
                                            </ul>



                                        </li>
                                    </ul>
                        
                                <a href=\"#modulo_trafico_servicios\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Servicios</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_servicios\">
                                        <li>
                                            <a href=\"";
        // line 345
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_diagrama_servicio_index");
        yield "\" class=\"pl-4\">Administrar</a>
                                        </li>
                                        <li>

                                        <a href=\"#modulo_trafico_catalogos_servicios\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_catalogos_servicios\">
                                                <li>
                                                    <a href=\"";
        // line 352
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_ciudad_index");
        yield "\" class=\"pl-4\">Ciudades</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 355
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_diagrama_fase_diaria_index");
        yield "\" class=\"pl-4\">Fase Diaria Servicio</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 358
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_diagrama_modalidad_servicio_index");
        yield "\" class=\"pl-4\">Modalidad Servicio</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 361
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_pais_index");
        yield "\" class=\"pl-4\">Paises</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 364
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_provincia_index");
        yield "\" class=\"pl-4\">Provincias</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 367
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_punto_inicial_final_index");
        yield "\" class=\"pl-4\">Puntos Inicio Fin</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 370
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_diagrama_tipo_servicio_index");
        yield "\" class=\"pl-4\">Tipo Servicio</a>
                                                </li>
                                            </ul>



                                        </li>
                                    </ul>

                                    

                                <a href=\"#modulo_trafico_restricciones\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Restricciones</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_restricciones\">
                                        <li>
                                            <a href=\"";
        // line 384
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_restricciones_restriccion_index");
        yield "\" class=\"pl-4\">Administrar</a>
                                        </li>
                                        <li>

                                        <a href=\"#modulo_trafico_restricciones_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_restricciones_catalogos\">
                                                <li>
                                                    <a href=\"";
        // line 391
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_cliente_actividad_index");
        yield "\" class=\"pl-4\">Actividades</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 394
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_cliente_condicion_venta_index");
        yield "\" class=\"pl-4\">Condiciones Venta</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 397
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_cliente_situacion_ganancia_index");
        yield "\" class=\"pl-4\">Situacion Ganancia</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 400
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_cliente_situacion_i_i_g_g_index");
        yield "\" class=\"pl-4\">Situacion IIGG</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 403
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_cliente_situacion_iva_index");
        yield "\" class=\"pl-4\">Situacion IVA</a>
                                                </li>
                                            </ul>



                                        </li>
                                    </ul>
                                
                                    
                                
                                <a href=\"#modulo_trafico_clientes\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Clientes</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_clientes\">
                                        <li>
                                            <a href=\"";
        // line 417
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_cliente_index");
        yield "\" class=\"pl-4\">Administrar</a>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 420
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_planta_cliente_index");
        yield "\" class=\"pl-4\">Plantas Cliente</a>
                                        </li>
                                        <li>

                                        <a href=\"#modulo_trafico_clientes_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_clientes_catalogos\">
                                                <li>
                                                    <a href=\"";
        // line 427
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_cliente_actividad_index");
        yield "\" class=\"pl-4\">Actividades</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 430
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_cliente_condicion_venta_index");
        yield "\" class=\"pl-4\">Condiciones Venta</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 433
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_cliente_situacion_ganancia_index");
        yield "\" class=\"pl-4\">Situacion Ganancia</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 436
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_cliente_situacion_i_i_g_g_index");
        yield "\" class=\"pl-4\">Situacion IIGG</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 439
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trafico_catalogos_cliente_situacion_iva_index");
        yield "\" class=\"pl-4\">Situacion IVA</a>
                                                </li>
                                            </ul>



                                        </li>
                                    </ul>
                            </li>
                        </ul>
                  </li>


                  <li>
                        <a href=\"#home-menu-administrar\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Administrar Sistema</a>
                        <ul class=\"collapse list-unstyled\" id=\"home-menu-administrar\">
                            <li>
                                <a href=\"#sub-sub-administrar\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Operaciones y Bases</a>
                                    <ul class=\"collapse list-unstyled\" id=\"sub-sub-administrar\">
                                        <li>
                                            <a href=\"";
        // line 459
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_common_estructura_index");
        yield "\" class=\"pl-4\">Bases</a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                  </li>



                  <li>
                        <a href=\"#home-menu-usuarios\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Administrar Usuarios</a>
                        <ul class=\"collapse list-unstyled\" id=\"home-menu-usuarios\">
                            <li>
                                <a href=\"#sub-sub-user-system\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Usuarios Sistema</a>
                                    <ul class=\"collapse list-unstyled\" id=\"sub-sub-user-system\">
                                        <li>
                                     
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 478
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_user_index");
        yield "\" class=\"pl-4\">Listado</a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                  </li>
            </ul>

            <div class=\"footer\">

            </div>

          </div>
        </nav>

        <!-- Page Content  -->
      <div id=\"content\" class=\"p-4 p-md-5\">

        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
          <div class=\"container-fluid\">

            <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-primary\">
              <i class=\"fa fa-bars\"></i>
              <span class=\"sr-only\">Toggle Menu</span>
            </button>
            <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"nav navbar-nav ml-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle px-3\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\"
                      aria-haspopup=\"true\" aria-expanded=\"false\">
                      
                      ";
        // line 513
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 513), "username", [], "any", true, true, false, 513)) {
            // line 514
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 514, $this->source); })()), "user", [], "any", false, false, false, 514), "username", [], "any", false, false, false, 514), "html", null, true);
            yield "
                    ";
        }
        // line 516
        yield "                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-default\"
                      aria-labelledby=\"navbarDropdownMenuLink-333\">
                      <a class=\"dropdown-item\" href=\"";
        // line 519
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Cerrar Sesion</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class=\"container-fluid\">
            ";
        // line 530
        yield from $this->unwrap()->yieldBlock('title_block', $context, $blocks);
        // line 532
        yield "        </div>
  
            ";
        // line 534
        yield from $this->unwrap()->yieldBlock('content_user', $context, $blocks);
        // line 536
        yield "
      </div>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 530
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_block"));

        // line 531
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 534
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_user(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_user"));

        // line 535
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 541
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_footer"));

        // line 542
        yield "    
    ";
        // line 543
        yield from $this->yieldParentBlock("javascripts_footer", $context, $blocks);
        yield "

    <script src=\"https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js\"></script>

    <script src=\"https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js\"></script>
    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navBar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  961 => 543,  958 => 542,  948 => 541,  940 => 535,  930 => 534,  922 => 531,  912 => 530,  901 => 536,  899 => 534,  895 => 532,  893 => 530,  879 => 519,  874 => 516,  868 => 514,  866 => 513,  828 => 478,  806 => 459,  783 => 439,  777 => 436,  771 => 433,  765 => 430,  759 => 427,  749 => 420,  743 => 417,  726 => 403,  720 => 400,  714 => 397,  708 => 394,  702 => 391,  692 => 384,  675 => 370,  669 => 367,  663 => 364,  657 => 361,  651 => 358,  645 => 355,  639 => 352,  629 => 345,  614 => 333,  608 => 330,  602 => 327,  596 => 324,  590 => 321,  584 => 318,  578 => 315,  566 => 306,  562 => 305,  552 => 298,  548 => 297,  524 => 276,  518 => 273,  512 => 270,  506 => 267,  496 => 260,  490 => 257,  473 => 243,  467 => 240,  461 => 237,  455 => 234,  449 => 231,  443 => 228,  437 => 225,  431 => 222,  425 => 219,  419 => 216,  408 => 208,  391 => 194,  385 => 191,  379 => 188,  373 => 185,  367 => 182,  361 => 179,  355 => 176,  349 => 173,  343 => 170,  337 => 167,  331 => 164,  320 => 156,  301 => 140,  295 => 137,  289 => 134,  283 => 131,  271 => 122,  260 => 114,  245 => 102,  239 => 99,  233 => 96,  227 => 93,  217 => 86,  207 => 79,  201 => 76,  188 => 66,  183 => 64,  173 => 57,  167 => 54,  150 => 39,  147 => 38,  137 => 36,  134 => 35,  129 => 34,  127 => 33,  120 => 29,  112 => 23,  110 => 22,  105 => 20,  98 => 15,  88 => 14,  71 => 4,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
        {{ parent() }}



        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css\">

{% endblock  %}


{% block body %}
<div class=\"wrapper d-flex align-items-stretch\">
            <nav id=\"sidebar\">
                <div class=\"p-4 pt-5\">


                        <img class=\"img logo rounded mb-5\" src=\"{{ asset('images/logo.png') }}\"/>
                        
                        {% set filter = app.session.get('strname') %}
                        

                        <ul class=\"nav navbar-nav ml-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-222\" data-toggle=\"dropdown\"
                              aria-haspopup=\"true\" aria-expanded=\"false\">
                              {{ filter }}
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right dropdown-default text-light bg-dark\"
                              aria-labelledby=\"navbarDropdownMenuLink-222\">
                              {% if app.user.estructuras is defined %}
                                  {% for e in app.user.estructuras %}
                                    <a style=\"font-size: 12px;\" class=\"dropdown-item text-light bg-dark px-2\" 
                                       href=\"{{ path('app_security_user_change_str', { id : e.id }) }}\">{{ e }}</a>
                                {% endfor %}
                            {% endif %}
                            </div>
                        </li>
              </ul>

                        <hr>
            <ul class=\"list-unstyled components mb-5\">
                  <li>
                        <a href=\"#modulo_rrhh\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Modulo RRHH</a>
                        <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh\">
                            <li>      


                                <a href=\"#modulo_rrhh_empleadores\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Personal</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_empleadores\">
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_empleado_index') }}\" class=\"pl-4\">Listado</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_vtos_tipo_vencimiento_conductor_index') }}\" class=\"pl-4\">Configurar Vtos.</a>
                                        </li>
                                    </ul>

                                <a href=\"#modulo_rrhh_vacaciones_personal\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Vacaciones</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_vacaciones_personal\">
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_gestion_control_movimiento_personal_index') }}\" class=\"pl-4\">Gestionar</a>

                                            <a href=\"{{ path('app_r_r_h_h_gestion_control_movimiento_personal_listado') }}\" class=\"pl-4\">Listado</a>

                                        </li>
                                    </ul>

   

                                <a href=\"#modulo_rrhh_admin_novedades\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Novedades</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_admin_novedades\">
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_novedades_novedad_index') }}\" class=\"pl-4\">Listado</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_novedades_tipo_novedad_index') }}\" class=\"pl-4\">Tipos Novedades</a>
                                        </li>
                                    </ul>

                                <a href=\"#module_rr_certificados_medicos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Certificados Medicos</a>
                                    <ul class=\"collapse list-unstyled\" id=\"module_rr_certificados_medicos\">
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_cert_med_certificado_medico_index') }}\" class=\"pl-4\">Administrar</a>
                                        </li>
                                        <li>

                                        <a href=\"#modulo_rrhh_cert_medicos_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_cert_medicos_catalogos\">
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_cert_med_centro_asistencial_index') }}\" class=\"pl-4\">Centros Asistenciales</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_cert_med_diagnostico_index') }}\" class=\"pl-4\">Diagnosticos</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_cert_med_especialidad_index') }}\" class=\"pl-4\">Especialidades</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_cert_med_medico_responsable_index') }}\" class=\"pl-4\">Medicos</a>
                                                </li>
                                            </ul>



                                        </li>
                                    </ul>

                                <a href=\"#modulo_rrhh_pedidos_explicacion\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Pedidos Explicacion</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_pedidos_explicacion\">
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_sanciones_pedido_explicacion_index') }}\" class=\"pl-4\">Gestionar</a>
                                        </li>
                                    </ul>

                                <a href=\"#modulo_rrhh_tipos_vtos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Vencimientos</a>

                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_tipos_vtos\">
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_vtos_tipo_vencimiento_index') }}\" class=\"pl-4\">Administrar</a>
                                        </li>
                                    </ul>


                                <a href=\"#modulo_rrhh_bd\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Catalogos</a>

                                    <ul class=\"collapse list-unstyled\" id=\"modulo_rrhh_bd\">
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_utils_cargo_index') }}\" class=\"pl-4\">Puestos</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('app_common_empleador_index') }}\" class=\"pl-4\">Empleadores</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_utils_sector_index') }}\" class=\"pl-4\">Sectores</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('app_r_r_h_h_utils_turno_index') }}\" class=\"pl-4\">Turnos</a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                  </li>

                  <li>
                        <a href=\"#modulo_seguridad_vial\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Modulo Seg. Vial</a>
                        <ul class=\"collapse list-unstyled\" id=\"modulo_seguridad_vial\">

                            <li>      
                                <a href=\"#modulo_seguridad_vial_unidades\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Unidades</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_seguridad_vial_unidades\">

                                        <li>
                                            <a href=\"{{ path('app_seg_vial_unidad_index') }}\" class=\"pl-4\">Administrar</a>
                                        </li>

                                        <li>

                                        <a href=\"#modulo_seg_vial_unidades_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_seg_vial_unidades_catalogos\">
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_calidad_index') }}\" class=\"pl-4\">Calidad Unidad</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_marca_a_a_index') }}\" class=\"pl-4\">Marca A.A.</a>
                                                </li>   
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_marca_carroceria_index') }}\" class=\"pl-4\">Marca Carroceria</a>
                                                </li>                                                                                                                                 
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_marca_chasis_index') }}\" class=\"pl-4\">Marca Chasis</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_marca_motor_index') }}\" class=\"pl-4\">Marca Motor</a>
                                                </li>         
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_modelo_carroceria_index') }}\" class=\"pl-4\">Modelo Carroceria</a>
                                                </li>       
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_modelo_chasis_index') }}\" class=\"pl-4\">Modelo Chasis</a>
                                                </li>          
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_servicio_unidad_index') }}\" class=\"pl-4\">Servicios Unidad</a>
                                                </li>     
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_tipo_motor_index') }}\" class=\"pl-4\">Tipo Motor</a>
                                                </li>           
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_tipo_unidad_index') }}\" class=\"pl-4\">Tipo Unidad</a>
                                                </li>   
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_catalogos_ubicacion_motor_index') }}\" class=\"pl-4\">Ubicacion Motor</a>
                                                </li>                                                                                                    
                                            </ul>



                                        </li>
                                    </ul>
                            </li>
                            <li>      
                                <a href=\"#modulo_seguridad_vial_siniestros\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Siniestros</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_seguridad_vial_siniestros\">

                                                                                <li>
                                            <a href=\"{{ path('app_r_r_h_h_sucesos_siniestro_index') }}\" class=\"pl-4\">Administrar</a>
                                        </li>

                                        <li>

                                        <a href=\"#modulo_seg_vial_sucesos_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_seg_vial_sucesos_catalogos\">
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_sucesos_catalogos_configuracion_calzada_index') }}\" class=\"pl-4\">Configuracion de Calzada</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_sucesos_catalogos_estado_rodadura_index') }}\" class=\"pl-4\">Estado de Rodadura</a>
                                                </li>   
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_sucesos_catalogos_objeto_colision_index') }}\" class=\"pl-4\">Objeto de Colision</a>
                                                </li>                                                                                                                                 
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_sucesos_catalogos_tipo_banquina_index') }}\" class=\"pl-4\">Tipos Banquina</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_sucesos_catalogos_tipo_calzada_index') }}\" class=\"pl-4\">Tipo de Calzada</a>
                                                </li>         
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_sucesos_catalogos_tipo_clima_index') }}\" class=\"pl-4\">Tipo de Clima</a>
                                                </li>       
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_sucesos_catalogos_tipo_colision_index') }}\" class=\"pl-4\">Tipo de Colision</a>
                                                </li>          
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_sucesos_catalogos_tipo_iluminacion_index') }}\" class=\"pl-4\">Tipo de Iluminacion</a>
                                                </li>     
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_sucesos_estado_lesion_index') }}\" class=\"pl-4\">Tipo de Lesion</a>
                                                </li>           
                                                <li>
                                                    <a href=\"{{ path('app_r_r_h_h_sucesos_catalogos_tipo_visibilidad_index') }}\" class=\"pl-4\">Tipo de Visibilidad</a>
                                                </li>                                                                                                     
                                            </ul>



                                        </li>
                                    </ul>
                            </li>
                            <li>      
                                <a href=\"#modulo_seg_vial_vtos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Vencimientos</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_seg_vial_vtos\">

                                        <li>
                                            <a href=\"{{ path('app_seg_vial_vtos_seguro_automotor_index') }}\" class=\"pl-4\">Administrar Seguros</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('app_seg_vial_vtos_verificacion_tecnica_index') }}\" class=\"pl-4\">Administrar Verifi. Tecnicas</a>
                                        </li>
                                        <li>

                                        <a href=\"#modulo_seg_vial_vtos_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_seg_vial_vtos_catalogos\">
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_vtos_compania_seguro_index') }}\" class=\"pl-4\">Compañias Seguro</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_vtos_cobertura_seguro_automotor_index') }}\" class=\"pl-4\">Cobertura Seguro</a>
                                                </li>                                                                                                
                                                                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_vtos_tipo_destino_seguro_automotor_index') }}\" class=\"pl-4\">Tipo Destino</a>
                                                </li>        
                                                <li>
                                                    <a href=\"{{ path('app_seg_vial_vtos_planta_verificadora_index') }}\" class=\"pl-4\">Plantas Verificadoras</a>
                                                </li> 
                                            </ul>



                                        </li>
                                    </ul>
                            </li>
                        </ul>
                  </li>



                  <li>
                        <a href=\"#modulo_trafico\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Modulo Trafico</a>
                        <ul class=\"collapse list-unstyled\" id=\"modulo_trafico\">
                            <li>      
                                <a href=\"#modulo_trafico_ordenes_trabajo\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Ordenes Trabajo</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_ordenes_trabajo\">
                                        <li>
                                            <a href=\"{{ path('app_trafico_orden_trabajo_index') }}\" class=\"pl-4\">Operacion</a>
                                            <a href=\"{{ path('app_common_unidad_trabajo_informe') }}\" class=\"pl-4\">Diagramacion</a>
                                            
                                        </li>
                                        <li>
                                        <a href=\"#modulo_trafico_diagramas_diarios\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Diagrama Diario</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_diagramas_diarios\">
                                                <li>
                                                    <a href=\"{{ path('app_trafico_diagrama_diagrama_trabajo_index') }}\" class=\"pl-4 ml-2\">Diagramas Trabajo</a>
                                                    <a href=\"{{ path('app_trafico_diagrama_copia_diagrama_trabajo_index') }}\" class=\"pl-4 ml-2\"> Copiar Diagrama</a>


                                                </li>
                                            </ul>

                                        <a href=\"#modulo_trafico_catalogos_servicios\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_catalogos_servicios\">
                                                <li>
                                                    <a href=\"{{ path('app_common_ciudad_index') }}\" class=\"pl-4\">Ciudades</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_diagrama_fase_diaria_index') }}\" class=\"pl-4\">Fase Diaria Servicio</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_diagrama_modalidad_servicio_index') }}\" class=\"pl-4\">Modalidad Servicio</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_common_pais_index') }}\" class=\"pl-4\">Paises</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_common_provincia_index') }}\" class=\"pl-4\">Provincias</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_common_punto_inicial_final_index') }}\" class=\"pl-4\">Puntos Inicio Fin</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_diagrama_tipo_servicio_index') }}\" class=\"pl-4\">Tipo Servicio</a>
                                                </li>
                                            </ul>



                                        </li>
                                    </ul>
                        
                                <a href=\"#modulo_trafico_servicios\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Servicios</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_servicios\">
                                        <li>
                                            <a href=\"{{ path('app_trafico_diagrama_servicio_index') }}\" class=\"pl-4\">Administrar</a>
                                        </li>
                                        <li>

                                        <a href=\"#modulo_trafico_catalogos_servicios\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_catalogos_servicios\">
                                                <li>
                                                    <a href=\"{{ path('app_common_ciudad_index') }}\" class=\"pl-4\">Ciudades</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_diagrama_fase_diaria_index') }}\" class=\"pl-4\">Fase Diaria Servicio</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_diagrama_modalidad_servicio_index') }}\" class=\"pl-4\">Modalidad Servicio</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_common_pais_index') }}\" class=\"pl-4\">Paises</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_common_provincia_index') }}\" class=\"pl-4\">Provincias</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_common_punto_inicial_final_index') }}\" class=\"pl-4\">Puntos Inicio Fin</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_diagrama_tipo_servicio_index') }}\" class=\"pl-4\">Tipo Servicio</a>
                                                </li>
                                            </ul>



                                        </li>
                                    </ul>

                                    

                                <a href=\"#modulo_trafico_restricciones\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Restricciones</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_restricciones\">
                                        <li>
                                            <a href=\"{{ path('app_trafico_restricciones_restriccion_index') }}\" class=\"pl-4\">Administrar</a>
                                        </li>
                                        <li>

                                        <a href=\"#modulo_trafico_restricciones_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_restricciones_catalogos\">
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_cliente_actividad_index') }}\" class=\"pl-4\">Actividades</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_cliente_condicion_venta_index') }}\" class=\"pl-4\">Condiciones Venta</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_cliente_situacion_ganancia_index') }}\" class=\"pl-4\">Situacion Ganancia</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_cliente_situacion_i_i_g_g_index') }}\" class=\"pl-4\">Situacion IIGG</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_cliente_situacion_iva_index') }}\" class=\"pl-4\">Situacion IVA</a>
                                                </li>
                                            </ul>



                                        </li>
                                    </ul>
                                
                                    
                                
                                <a href=\"#modulo_trafico_clientes\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Clientes</a>
                                    <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_clientes\">
                                        <li>
                                            <a href=\"{{ path('app_trafico_cliente_index') }}\" class=\"pl-4\">Administrar</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('app_trafico_planta_cliente_index') }}\" class=\"pl-4\">Plantas Cliente</a>
                                        </li>
                                        <li>

                                        <a href=\"#modulo_trafico_clientes_catalogos\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-4\">Catalogos</a>
                                            <ul class=\"collapse list-unstyled\" id=\"modulo_trafico_clientes_catalogos\">
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_cliente_actividad_index') }}\" class=\"pl-4\">Actividades</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_cliente_condicion_venta_index') }}\" class=\"pl-4\">Condiciones Venta</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_cliente_situacion_ganancia_index') }}\" class=\"pl-4\">Situacion Ganancia</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_cliente_situacion_i_i_g_g_index') }}\" class=\"pl-4\">Situacion IIGG</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('app_trafico_catalogos_cliente_situacion_iva_index') }}\" class=\"pl-4\">Situacion IVA</a>
                                                </li>
                                            </ul>



                                        </li>
                                    </ul>
                            </li>
                        </ul>
                  </li>


                  <li>
                        <a href=\"#home-menu-administrar\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Administrar Sistema</a>
                        <ul class=\"collapse list-unstyled\" id=\"home-menu-administrar\">
                            <li>
                                <a href=\"#sub-sub-administrar\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Operaciones y Bases</a>
                                    <ul class=\"collapse list-unstyled\" id=\"sub-sub-administrar\">
                                        <li>
                                            <a href=\"{{ path('app_common_estructura_index') }}\" class=\"pl-4\">Bases</a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                  </li>



                  <li>
                        <a href=\"#home-menu-usuarios\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Administrar Usuarios</a>
                        <ul class=\"collapse list-unstyled\" id=\"home-menu-usuarios\">
                            <li>
                                <a href=\"#sub-sub-user-system\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle pl-3\">Usuarios Sistema</a>
                                    <ul class=\"collapse list-unstyled\" id=\"sub-sub-user-system\">
                                        <li>
                                     
                                        </li>
                                        <li>
                                            <a href=\"{{ path('app_security_user_index') }}\" class=\"pl-4\">Listado</a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                  </li>
            </ul>

            <div class=\"footer\">

            </div>

          </div>
        </nav>

        <!-- Page Content  -->
      <div id=\"content\" class=\"p-4 p-md-5\">

        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
          <div class=\"container-fluid\">

            <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-primary\">
              <i class=\"fa fa-bars\"></i>
              <span class=\"sr-only\">Toggle Menu</span>
            </button>
            <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"nav navbar-nav ml-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle px-3\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\"
                      aria-haspopup=\"true\" aria-expanded=\"false\">
                      
                      {% if app.user.username is defined %}
                        {{ app.user.username }}
                    {% endif %}
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-default\"
                      aria-labelledby=\"navbarDropdownMenuLink-333\">
                      <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Cerrar Sesion</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class=\"container-fluid\">
            {% block title_block %}
            {% endblock%}
        </div>
  
            {% block content_user %}
            {% endblock%}

      </div>
        </div>
{% endblock %}

{% block javascripts_footer %}
    
    {{ parent() }}

    <script src=\"https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js\"></script>

    <script src=\"https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js\"></script>
    

{% endblock %}", "navBar.html.twig", "E:\\proyectos\\mercedesBus\\templates\\navBar.html.twig");
    }
}
