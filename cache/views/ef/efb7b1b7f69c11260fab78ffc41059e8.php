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

/* templates/instruction.twig */
class __TwigTemplate_0dbf084a0cf3e90943167a70361ebf05 extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "templates/instruction.twig", 1);
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
        yield "    Образцы инструкций по охране труда, пожарной безопасности, производственных инструкций
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
        yield "    <div class=\"container pb-3 mb-12\">
        <div class=\"row mt-3\">
            <div class=\"col-md-12 mt-5\">
                <h1>Шаблоны инструкций</h1>
                <p>Ниже вы найдете образцы инструкций по охране труда по профессиям и видам работ, инструкции о мерах пожарной безопасности, производственные инструкции.</p>
                <div class=\"d-flex my-5 flex-wrap \">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["instructions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["instruction"]) {
            // line 19
            yield "                        <div class=\"card document-card m-3\">
                            <a href=\"/template/instruction/";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "filename", [], "any", false, false, false, 20), "html", null, true);
            yield "\">
                                <div class=\"card-body\">
                                    <div class=\"card-title\">
                                        <small>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "title", [], "any", false, false, false, 23), "html", null, true);
            yield "</small>
                                    </div>
                                    <small class=\"card-subtitle mb-2 text-muted\">Категория: Охрана труда </small>
                                </div>
                                <div class=\"card-footer document-footer d-flex justify-content-between\">
                                    <span><i class=\"fa-regular fa-calendar-days\"></i> 18.01.2025</span>
                                    <span>Размер файла:  33</span>
                                    <span><i class=\"fa-solid fa-download\"></i> 10</span>
                                </div>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['instruction'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "


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
        return "templates/instruction.twig";
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
        return array (  125 => 35,  107 => 23,  101 => 20,  98 => 19,  94 => 18,  86 => 12,  79 => 11,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/layout.twig\" %}

{% block title %}
    Образцы инструкций по охране труда, пожарной безопасности, производственных инструкций
{% endblock %}

{% block description %}

{% endblock %}

{% block content %}
    <div class=\"container pb-3 mb-12\">
        <div class=\"row mt-3\">
            <div class=\"col-md-12 mt-5\">
                <h1>Шаблоны инструкций</h1>
                <p>Ниже вы найдете образцы инструкций по охране труда по профессиям и видам работ, инструкции о мерах пожарной безопасности, производственные инструкции.</p>
                <div class=\"d-flex my-5 flex-wrap \">
                    {% for instruction in instructions %}
                        <div class=\"card document-card m-3\">
                            <a href=\"/template/instruction/{{ instruction.filename }}\">
                                <div class=\"card-body\">
                                    <div class=\"card-title\">
                                        <small>{{ instruction.title }}</small>
                                    </div>
                                    <small class=\"card-subtitle mb-2 text-muted\">Категория: Охрана труда </small>
                                </div>
                                <div class=\"card-footer document-footer d-flex justify-content-between\">
                                    <span><i class=\"fa-regular fa-calendar-days\"></i> 18.01.2025</span>
                                    <span>Размер файла:  33</span>
                                    <span><i class=\"fa-solid fa-download\"></i> 10</span>
                                </div>
                            </a>
                        </div>
                    {% endfor %}



                </div>
            </div>
        </div>
    </div>
{% endblock %}", "templates/instruction.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\templates\\instruction.twig");
    }
}
