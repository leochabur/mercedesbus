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

/* security/login.html.twig */
class __TwigTemplate_5c121bbd16b005b454208a00d87a8eb2 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "navBar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("navBar.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container text-center\">
  
        <form method=\"post\">

            <div class=\"row\">
                <div class=\"col-lg-3\">

                </div>

                <div class=\"col pt-4 mt-4\">
            <h1 class=\"h3 mb-3 font-weight-normal\">Acceso usuarios</h1>
            <label for=\"username\">Usuario</label>
            <input type=\"text\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"username\" required autofocus>
            <label for=\"password\">Password</label>
            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>

            <input type=\"hidden\" name=\"_csrf_token\"
                   value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
            >
            <br>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                Acceder
            </button>
        </div>
        <div class=\"col-lg-3\">
        </div>
    </div>
        </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  107 => 23,  99 => 18,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'navBar.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<div class=\"container text-center\">
  
        <form method=\"post\">

            <div class=\"row\">
                <div class=\"col-lg-3\">

                </div>

                <div class=\"col pt-4 mt-4\">
            <h1 class=\"h3 mb-3 font-weight-normal\">Acceso usuarios</h1>
            <label for=\"username\">Usuario</label>
            <input type=\"text\" value=\"{{ last_username }}\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"username\" required autofocus>
            <label for=\"password\">Password</label>
            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>

            <input type=\"hidden\" name=\"_csrf_token\"
                   value=\"{{ csrf_token('authenticate') }}\"
            >
            <br>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                Acceder
            </button>
        </div>
        <div class=\"col-lg-3\">
        </div>
    </div>
        </form>
</div>
{% endblock %}
", "security/login.html.twig", "E:\\proyectos\\mercedesBus\\templates\\security\\login.html.twig");
    }
}
