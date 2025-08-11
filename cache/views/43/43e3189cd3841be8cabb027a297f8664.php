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

/* instruction/index.twig */
class __TwigTemplate_8c6fbb2a8546cc50a864a291c7b9f956 extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "instruction/index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["instruction"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    Образец (форма)";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["instruction"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    <main id=\"front-page\" class=\"site-main\">
        <div class=\"container pb-3 mb-12\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-md-9 mt-5\">
                    <h1 class=\"fs-4\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["instruction"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
        yield "</h1>

                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"download-file my-3\">
                            <a href=\"\" id=\"get-document\" data-nd=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["instruction"] ?? null), "nd", [], "any", false, false, false, 21), "html", null, true);
        yield "\">
                                <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 22), "html", null, true);
        yield "/assets/images/download-file.png\" alt=\"Скачать файл\" width=\"25\" height=\"25\"> Скачать файл
                            </a>
                        </div>
                        <div>
                            <small class=\"text-muted\">Добавлен: </small>
                        </div>
                    </div>
                    ";
        // line 29
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["instruction"] ?? null), "text", [], "any", false, false, false, 29);
        yield "
                </div>
            </div>
        </div>
    </main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "instruction/index.twig";
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
        return array (  117 => 29,  107 => 22,  103 => 21,  96 => 17,  90 => 13,  83 => 12,  75 => 9,  68 => 8,  60 => 5,  53 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/layout.twig\" %}


{% block title %}
    {{ instruction.title }}
{% endblock %}

{% block description %}
    Образец (форма){{ instruction.title }}
{% endblock %}

{% block content %}
    <main id=\"front-page\" class=\"site-main\">
        <div class=\"container pb-3 mb-12\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-md-9 mt-5\">
                    <h1 class=\"fs-4\">{{ instruction.title }}</h1>

                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"download-file my-3\">
                            <a href=\"\" id=\"get-document\" data-nd=\"{{ instruction.nd }}\">
                                <img src=\"{{ init.PATH }}/assets/images/download-file.png\" alt=\"Скачать файл\" width=\"25\" height=\"25\"> Скачать файл
                            </a>
                        </div>
                        <div>
                            <small class=\"text-muted\">Добавлен: </small>
                        </div>
                    </div>
                    {{ instruction.text|raw }}
                </div>
            </div>
        </div>
    </main>
{% endblock %}", "instruction/index.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\instruction\\index.twig");
    }
}
