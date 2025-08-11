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

/* /cabinet/index.twig */
class __TwigTemplate_ddb9f6269982723327e7d97c43566aab extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "/cabinet/index.twig", 1);
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
        yield "    Кабинет пользователя
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
            <div class=\"col-md-10 col-sm-12 mt-5\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h2>Мой кабинет</h2>

                    <a href=\"/auth/logout\" class=\"btn btn-outline-secondary \">Выход</a>
                </div>
                <div class=\"mt-3\">
                    <div class=\"input-group mb-3\">
                        <span class=\"input-group-text\">Ваш email:</span>
                        <span class=\"input-group-text\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["email"] ?? null), "html", null, true);
        yield "</span>
                    </div>

                    ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscribe"] ?? null), "status", [], "any", false, false, false, 26) == "inactive")) {
            // line 27
            yield "                    <div class=\"input-group mb-3\">
                        <span class=\"input-group-text\">Доступное количество скачиваний:</span>
                        <span class=\"input-group-text\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "attempts", [], "any", false, false, false, 29), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        // line 32
        yield "                    <div class=\"input-group mb-3\">
                        <span class=\"input-group-text\">Подписка:</span>
                            ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscribe"] ?? null), "status", [], "any", false, false, false, 34) == "active")) {
            // line 35
            yield "                            <span class=\"input-group-text\">до ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscribe"] ?? null), "end_date", [], "any", false, false, false, 35), "d.m.Y"), "html", null, true);
            yield " г.</span>
                            ";
        } else {
            // line 37
            yield "                                <span class=\"input-group-text\">Не действует</span>
                                <span class=\"input-group-text\">
                                    <a href=\"/payment/subscribe\">Приобрести</a>
                                </span>
                            ";
        }
        // line 42
        yield "                    </div>
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
        return "/cabinet/index.twig";
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
        return array (  136 => 42,  129 => 37,  123 => 35,  121 => 34,  117 => 32,  111 => 29,  107 => 27,  105 => 26,  99 => 23,  86 => 12,  79 => 11,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "/cabinet/index.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/cabinet/index.twig");
    }
}
