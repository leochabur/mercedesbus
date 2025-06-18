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
class __TwigTemplate_2e2e79e268bc210136590cb340bf2a27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "navBar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "        ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

<style type=\"text/css\">

.dropdown-menu li {
  position: relative;
} 

.dropdown-menu .dropdown-submenu {
  display: none;
  position: absolute;
  left: 100%;
  top: -7px;
}

.dropdown-menu .dropdown-submenu-left {
  right: 100%;
  left: auto;
}

.dropdown-menu>li:hover>.dropdown-submenu {
  display: block;
}

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        yield "<nav class=\"navbar navbar-expand-lg bg-body-tertiary py-4\">
  <div class=\"container\">
    




    <a class=\"navbar-brand\" href=\"#\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item \">

        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Compras
          </button>
          <ul class=\"dropdown-menu\">
            <li class=\"nav-item\">
                        <button type=\"button\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Informes
          </button>
              <ul class=\"dropdown-menu\">
                <li>

                </li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_empleado_index");
        yield "\">Empleados</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>

              </ul>
            </li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_empleado_index");
        yield "\">Empleados</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_r_h_h_puesto_trabajo_index");
        yield "\">Puestos de Trabajo</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Separated link</a></li>
          </ul>
        </div>

        <div class=\"btn-group\">
        <li class=\"nav-item dropdown\">
          <a class=\"btn btn-outline-success dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Administracion
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

            <!-- webDevelopment DropDown -->

            <li>
              <a class=\"dropdown-item dropdown-toggle\" href=\"#\">Ventas</a>
              <ul class=\"dropdown-menu dropdown-submenu\">
                <li>
                  <a class=\"dropdown-item\" href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_administracion_cliente_index");
        yield "\">Clientes</a>
                </li>
                <li>
                  <a class=\"dropdown-item\" href=\"#\">Submenu Submenu item 2</a>
                  
                </ul>
                </li>
            

            <li><a class=\"dropdown-item\" href=\"#\">Software Development</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Networking and Cloud</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Cyber Defence and offensive</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">More</a></li>
          </ul>
        </li>
        </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
        </li>
      </ul>
      <form class=\"d-flex\" role=\"search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\"/>
        <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_footer"));

        // line 119
        yield "    
    ";
        // line 120
        yield from $this->yieldParentBlock("javascripts_footer", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  251 => 120,  248 => 119,  235 => 118,  194 => 87,  172 => 68,  167 => 66,  159 => 61,  129 => 33,  116 => 32,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
        {{ parent() }}

<style type=\"text/css\">

.dropdown-menu li {
  position: relative;
} 

.dropdown-menu .dropdown-submenu {
  display: none;
  position: absolute;
  left: 100%;
  top: -7px;
}

.dropdown-menu .dropdown-submenu-left {
  right: 100%;
  left: auto;
}

.dropdown-menu>li:hover>.dropdown-submenu {
  display: block;
}

</style>
{% endblock  %}


{% block body %}
<nav class=\"navbar navbar-expand-lg bg-body-tertiary py-4\">
  <div class=\"container\">
    




    <a class=\"navbar-brand\" href=\"#\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item \">

        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Compras
          </button>
          <ul class=\"dropdown-menu\">
            <li class=\"nav-item\">
                        <button type=\"button\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Informes
          </button>
              <ul class=\"dropdown-menu\">
                <li>

                </li>
                <li><a class=\"dropdown-item\" href=\"{{ path('app_r_r_h_h_empleado_index') }}\">Empleados</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>

              </ul>
            </li>
            <li><a class=\"dropdown-item\" href=\"{{ path('app_r_r_h_h_empleado_index') }}\">Empleados</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ path('app_r_r_h_h_puesto_trabajo_index') }}\">Puestos de Trabajo</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Separated link</a></li>
          </ul>
        </div>

        <div class=\"btn-group\">
        <li class=\"nav-item dropdown\">
          <a class=\"btn btn-outline-success dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Administracion
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">

            <!-- webDevelopment DropDown -->

            <li>
              <a class=\"dropdown-item dropdown-toggle\" href=\"#\">Ventas</a>
              <ul class=\"dropdown-menu dropdown-submenu\">
                <li>
                  <a class=\"dropdown-item\" href=\"{{ path('app_administracion_cliente_index') }}\">Clientes</a>
                </li>
                <li>
                  <a class=\"dropdown-item\" href=\"#\">Submenu Submenu item 2</a>
                  
                </ul>
                </li>
            

            <li><a class=\"dropdown-item\" href=\"#\">Software Development</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Networking and Cloud</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Cyber Defence and offensive</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">More</a></li>
          </ul>
        </li>
        </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
        </li>
      </ul>
      <form class=\"d-flex\" role=\"search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\"/>
        <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</nav>
{% endblock %}

{% block javascripts_footer %}
    
    {{ parent() }}

{% endblock %}", "navBar.html.twig", "E:\\proyectos\\mercedesBus\\templates\\navBar.html.twig");
    }
}
