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

/* /templates/parts/download.twig */
class __TwigTemplate_d39ef2f57c0d9bdfe3fd5eb62532f88b extends Template
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
        // line 1
        yield "<p>

";
        // line 3
        if (($this->env->getFunction('is_user_logged_in')->getCallable()(($context["app"] ?? null)) == true)) {
            // line 4
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subscribe"] ?? null), "status", [], "any", false, false, false, 4) == "active")) {
                // line 5
                yield "    <small>Вы можете скачивать документы без ограничений. Ваша подписка активна до ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["subscribe"] ?? null), "end_date", [], "any", false, false, false, 5), "d.m.Y"), "html", null, true);
                yield "</small>
    ";
            } else {
                // line 7
                yield "    <small>
        Вам доступно ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "attempts", [], "any", false, false, false, 8), "html", null, true);
                yield " пробных скачиваний. Чтобы снять ограничение необходимо <a href=\"/payment/subscribe\">приобрести подписку</a>
    </small>
    ";
            }
        }
        // line 12
        yield "</p>
";
        // line 13
        if (($this->env->getFunction('is_user_logged_in')->getCallable()(($context["app"] ?? null)) == true)) {
            // line 14
            yield "    <div class=\"d-flex align-items-center mt-3\">
        <button type=\"button\" id=\"get-document\" data-template=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "template_id", [], "any", false, false, false, 15), "html", null, true);
            yield "\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary\">Скачать</button> <span class=\"px-3\"><small><a href=\"\">Проблемы с документом?</a></small></span>
    </div>
";
        } else {
            // line 18
            yield "    <button type=\"button\" id=\"login\" class=\"btn btn-outline-secondary mt-3\">Скачать</button>
";
        }
        // line 20
        yield from $this->loadTemplate("auth/popup_login.twig", "/templates/parts/download.twig", 20)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/templates/parts/download.twig";
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
        return array (  87 => 20,  83 => 18,  75 => 15,  72 => 14,  70 => 13,  67 => 12,  60 => 8,  57 => 7,  51 => 5,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<p>

{% if is_user_logged_in(app) == true %}
    {%  if subscribe.status == 'active' %}
    <small>Вы можете скачивать документы без ограничений. Ваша подписка активна до {{ subscribe.end_date|date('d.m.Y') }}</small>
    {% else %}
    <small>
        Вам доступно {{ profile.attempts }} пробных скачиваний. Чтобы снять ограничение необходимо <a href=\"/payment/subscribe\">приобрести подписку</a>
    </small>
    {% endif %}
{% endif %}
</p>
{% if is_user_logged_in(app) == true  %}
    <div class=\"d-flex align-items-center mt-3\">
        <button type=\"button\" id=\"get-document\" data-template=\"{{ document.template_id }}\" data-id=\"{{ document.id }}\" class=\"btn btn-outline-secondary\">Скачать</button> <span class=\"px-3\"><small><a href=\"\">Проблемы с документом?</a></small></span>
    </div>
{% else %}
    <button type=\"button\" id=\"login\" class=\"btn btn-outline-secondary mt-3\">Скачать</button>
{% endif %}
{% include 'auth/popup_login.twig' %}
", "/templates/parts/download.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\templates\\parts\\download.twig");
    }
}
