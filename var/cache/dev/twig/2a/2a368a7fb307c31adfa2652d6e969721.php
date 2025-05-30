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

/* @Maker/test/ApiTestCase.tpl.php */
class __TwigTemplate_880de1757824c485d42b005b15b17658 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Maker/test/ApiTestCase.tpl.php"));

        // line 1
        yield "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use <?= \$api_test_case_fqcn; ?>;

class <?= \$class_name ?> extends ApiTestCase
{
    public function testSomething(): void
    {
        \$response = static::createClient()->request('GET', '/');

        \$this->assertResponseIsSuccessful();
        \$this->assertJsonContains(['@id' => '/']);
    }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Maker/test/ApiTestCase.tpl.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use <?= \$api_test_case_fqcn; ?>;

class <?= \$class_name ?> extends ApiTestCase
{
    public function testSomething(): void
    {
        \$response = static::createClient()->request('GET', '/');

        \$this->assertResponseIsSuccessful();
        \$this->assertJsonContains(['@id' => '/']);
    }
}
", "@Maker/test/ApiTestCase.tpl.php", "E:\\proyectos\\mercedesBus\\vendor\\symfony\\maker-bundle\\templates\\test\\ApiTestCase.tpl.php");
    }
}
