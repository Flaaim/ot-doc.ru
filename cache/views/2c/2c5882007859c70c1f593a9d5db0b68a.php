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

/* templates/instructions/get_one.twig */
class __TwigTemplate_f0501f4755992ba3bfe95e2922a98b1e extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "templates/instructions/get_one.twig", 1);
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
        yield "    Скачать ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        yield "
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
        yield "    Скачать образец ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
        yield ". Дата актуализации ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "date", [], "any", false, false, false, 8), "d.m.Y"), "html", null, true);
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
            <div class=\"col-md-8 col-sm-12 mt-5\">
                <h1 class=\"fs-4 mb-5\">Скачать ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        yield "</h1>
                <p>Тип: ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "type_name_1", [], "any", false, false, false, 16), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "type_name_2", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
                <p>Дата добавления: ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "date", [], "any", false, false, false, 17), "d.m.Y"), "html", null, true);
        yield " г.</p>
                <p>Размер файла: ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "size", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
                <p>Файл: ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "mime", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
                <p>Скачиваний: ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "count", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                <p><small>Для скачивания документа нажмите на кнопку скачать. Скачивание начнется автоматически. </small>
                </p>
                <p>
                    <button type=\"button\" id=\"get-document\" data-template=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "template_id", [], "any", false, false, false, 24), "html", null, true);
        yield "\" data-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["document"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary mt-3\">Скачать</button>
";
        // line 37
        yield "            </div>
            <div class=\"col-md-4 col-sm-12 mt-5\"></div>
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
        return "templates/instructions/get_one.twig";
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
        return array (  132 => 37,  126 => 24,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  101 => 16,  97 => 15,  92 => 12,  85 => 11,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/layout.twig\" %}

{% block title %}
    Скачать {{ document.title }}
{% endblock %}

{% block description %}
    Скачать образец {{ document.title }}. Дата актуализации {{ document.date | date('d.m.Y') }}
{% endblock %}

{% block content %}
    <div class=\"container pb-3 mb-12\">
        <div class=\"row mt-3\">
            <div class=\"col-md-8 col-sm-12 mt-5\">
                <h1 class=\"fs-4 mb-5\">Скачать {{ document.title }}</h1>
                <p>Тип: {{ document.type_name_1 }}, {{ document.type_name_2 }}</p>
                <p>Дата добавления: {{ document.date | date('d.m.Y') }} г.</p>
                <p>Размер файла: {{ document.size }}</p>
                <p>Файл: {{ document.mime }}</p>
                <p>Скачиваний: {{ document.count }}</p>
                <p><small>Для скачивания документа нажмите на кнопку скачать. Скачивание начнется автоматически. </small>
                </p>
                <p>
                    <button type=\"button\" id=\"get-document\" data-template=\"{{ document.template_id }}\" data-id=\"{{ document.id }}\" class=\"btn btn-outline-secondary mt-3\">Скачать</button>
{#                    {% if is_user_logged_in(app) == false %}#}
{#                    <small>Чтобы скачать документ, пожалуйста  <a href=\"/auth/login?redirect_to={{ request_uri|url_encode }}\">авторизируйтесь</a> или <a href=\"/auth/register\">зарегистрируйтесь</a> на сайте. Вам будет доступно 10 пробных скачиваний.#}
{#                    </small>#}
{#                        {% else %}#}
{#                        <small>#}
{#                            Вам доступно {{ profile.attempts }} пробных скачиваний. Чтобы снять ограничение необходимо <a href=\"/payment/subscribe\">приобрести подписку</a>#}
{#                        </small>#}
{#                    {% endif %}#}
{#                </p>#}
{#                {% if is_user_logged_in(app) == true or profile.attempts > 0 %}#}
{#                <button type=\"button\" id=\"get-document\" data-id=\"{{ instruction.id }}\" class=\"btn btn-outline-secondary mt-3\">Скачать</button>#}
{#                {% endif %}#}
            </div>
            <div class=\"col-md-4 col-sm-12 mt-5\"></div>
        </div>
    </div>
{% endblock %}", "templates/instructions/get_one.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/templates/instructions/get_one.twig");
    }
}
