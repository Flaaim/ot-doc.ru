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

/* templates/index.twig */
class __TwigTemplate_45aae3e732223d68e6bed76ae9765480 extends Template
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
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/layout.twig", "templates/index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    Шаблоны документов по охране труда
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "
";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "    <div class=\"container\">
        <div class=\"row mt-3\">
            <div class=\"col-md-12\">
                <h1 class=\"text-center\">Шаблоны документов по охране труда</h1>
                <p class=\"mt-3\">Ниже представлены шаблоны документов по охране труда и технике безопасности. Выбирайте интересующий вас документ. Переходите по ссылкам, качайте документы</p>
                <div class=\"d-flex my-5\">

                        <div class=\"card document-card\">
                            <a href=\"/templates/id#\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <small>МР 2.1.1.0358-24 «Методические рекомендации по подготовке проекта санитарно-защитной зоны»</small>
                                </div>
                            </div>
                            <div class=\"card-footer document-footer d-flex justify-content-between\">
                                <span><i class=\"fa-regular fa-calendar-days\"></i> 18.01.2025</span>
                                <span><i class=\"fa-solid fa-download\"></i> 10</span>
                            </div>
                            </a>
                        </div>


                </div>
            </div>
        </div>
    </div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "templates/index.twig";
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
        return array (  86 => 12,  79 => 11,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/layout.twig\" %}

{% block title %}
    Шаблоны документов по охране труда
{% endblock %}

{% block description %}

{% endblock %}

{% block content %}
    <div class=\"container\">
        <div class=\"row mt-3\">
            <div class=\"col-md-12\">
                <h1 class=\"text-center\">Шаблоны документов по охране труда</h1>
                <p class=\"mt-3\">Ниже представлены шаблоны документов по охране труда и технике безопасности. Выбирайте интересующий вас документ. Переходите по ссылкам, качайте документы</p>
                <div class=\"d-flex my-5\">

                        <div class=\"card document-card\">
                            <a href=\"/templates/id#\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <small>МР 2.1.1.0358-24 «Методические рекомендации по подготовке проекта санитарно-защитной зоны»</small>
                                </div>
                            </div>
                            <div class=\"card-footer document-footer d-flex justify-content-between\">
                                <span><i class=\"fa-regular fa-calendar-days\"></i> 18.01.2025</span>
                                <span><i class=\"fa-solid fa-download\"></i> 10</span>
                            </div>
                            </a>
                        </div>


                </div>
            </div>
        </div>
    </div>

{% endblock %}", "templates/index.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\templates\\index.twig");
    }
}
