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

/* templates/instructions/index.twig */
class __TwigTemplate_20282295404873dd3875de890a1da0c4 extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "templates/instructions/index.twig", 1);
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
        yield "    Шаблоны (образцы) инструкций по охране труда, пожбезопасности и другие
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
        yield "    Шаблоны инструкций по охране труда по профессиям и видам работ, инструкций о мерах пожарной безопасности, производственных инструкций, должностных инструкций для ознакомления и скачивания.
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
                <h1 class=\"mb-5\">Образцы (шаблоны) инструкций</h1>
                <p>
                    Ниже в таблице вы найдете образцы (шаблоны) типовых инструкций по охране труда по профессиям и видам работ, инструкции о мерах пожарной безопасности, производственные инструкции и должностные инструкции.
                </p>
                <p><b>Всего инструкций: ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield "</b></p>
                <div class=\"attention\">
                    <h5>Внимание!</h5>
                    <p>Ниже приведена статическая страница с документами, если вам необходимы такие функции как <b>фильтрация данных</b>, <b>сортировка</b>, <b>поиск</b> и т.д., переходите по <a href=\"/document/js/";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "slug", [], "any", false, false, false, 22), "html", null, true);
        yield "\">ссылке</a></p>
                </div>

                <div class=\"d-flex my-5 flex-wrap \">
                    <table class=\"table\" data-template=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 26), "html", null, true);
        yield "\" style=\"width:100%\">
                        <thead>
                        <tr>
                            <th>№ п/п</th>
                            <th>Наименование документа</th>
                            <th>Тип</th>
                            <th>Подтип</th>
                            <th>Добавлен</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["documents"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["document"]) {
            // line 38
            yield "                                <tr>
                                    <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "</td>
                                    <td><a href=\"/document/";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 40), "html", null, true);
            yield "</a></td>
                                    <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "type_name_1", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                    <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "type_name_2", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                    <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "date", [], "any", false, false, false, 43), "d.m.Y"), "html", null, true);
            yield "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['document'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                        </tbody>
                    </table>
                    ";
        // line 48
        yield ($context["pagination"] ?? null);
        yield "
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-12 \">
                <h2>Последние добавленные инструкции</h2>
                <div class=\"d-flex flex-wrap\">

                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lasts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 58
            yield "                        <div class=\"card document-card m-3\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <small><a href=\"/document/";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "template_id", [], "any", false, false, false, 61), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 61), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 61), "html", null, true);
            yield "</a></small>
                                </div>
                            </div>
                            <div class=\"card-footer document-footer d-flex justify-content-between\">
                                <span><i class=\"fa-regular fa-calendar-days\"></i> ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "date", [], "any", false, false, false, 65), "d.m.Y"), "html", null, true);
            yield "</span>
                                <span>Размер:  ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "size", [], "any", false, false, false, 66), "html", null, true);
            yield "</span>
                                <span><i class=\"fa-solid fa-download\"></i> ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "count", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['document'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                </div>

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
        return "templates/instructions/index.twig";
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
        return array (  212 => 71,  202 => 67,  198 => 66,  194 => 65,  183 => 61,  178 => 58,  174 => 57,  162 => 48,  158 => 46,  149 => 43,  145 => 42,  141 => 41,  133 => 40,  129 => 39,  126 => 38,  122 => 37,  108 => 26,  101 => 22,  95 => 19,  86 => 12,  79 => 11,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/layout.twig\" %}

{% block title %}
    Шаблоны (образцы) инструкций по охране труда, пожбезопасности и другие
{% endblock %}

{% block description %}
    Шаблоны инструкций по охране труда по профессиям и видам работ, инструкций о мерах пожарной безопасности, производственных инструкций, должностных инструкций для ознакомления и скачивания.
{% endblock %}

{% block content %}
    <div class=\"container pb-3 mb-12\">
        <div class=\"row mt-3\">
            <div class=\"col-md-12 mt-5\">
                <h1 class=\"mb-5\">Образцы (шаблоны) инструкций</h1>
                <p>
                    Ниже в таблице вы найдете образцы (шаблоны) типовых инструкций по охране труда по профессиям и видам работ, инструкции о мерах пожарной безопасности, производственные инструкции и должностные инструкции.
                </p>
                <p><b>Всего инструкций: {{ total }}</b></p>
                <div class=\"attention\">
                    <h5>Внимание!</h5>
                    <p>Ниже приведена статическая страница с документами, если вам необходимы такие функции как <b>фильтрация данных</b>, <b>сортировка</b>, <b>поиск</b> и т.д., переходите по <a href=\"/document/js/{{ template.slug }}\">ссылке</a></p>
                </div>

                <div class=\"d-flex my-5 flex-wrap \">
                    <table class=\"table\" data-template=\"{{ template.id }}\" style=\"width:100%\">
                        <thead>
                        <tr>
                            <th>№ п/п</th>
                            <th>Наименование документа</th>
                            <th>Тип</th>
                            <th>Подтип</th>
                            <th>Добавлен</th>
                        </tr>
                        </thead>
                        <tbody>
                            {% for key, document  in documents %}
                                <tr>
                                    <td>{{ key }}</td>
                                    <td><a href=\"/document/{{ template.id }}/{{ document.id }}\">{{ document.title }}</a></td>
                                    <td>{{ document.type_name_1 }}</td>
                                    <td>{{ document.type_name_2 }}</td>
                                    <td>{{ document.date|date('d.m.Y') }}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                    {{ pagination|raw }}
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-12 \">
                <h2>Последние добавленные инструкции</h2>
                <div class=\"d-flex flex-wrap\">

                    {% for document in lasts %}
                        <div class=\"card document-card m-3\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <small><a href=\"/document/{{ document.template_id }}/{{ document.id }}\">{{ document.title }}</a></small>
                                </div>
                            </div>
                            <div class=\"card-footer document-footer d-flex justify-content-between\">
                                <span><i class=\"fa-regular fa-calendar-days\"></i> {{ document.date | date(\"d.m.Y\") }}</span>
                                <span>Размер:  {{ document.size }}</span>
                                <span><i class=\"fa-solid fa-download\"></i> {{ document.count }}</span>
                            </div>
                        </div>
                    {% endfor %}
                </div>

            </div>

        </div>
    </div>
{% endblock %}
", "templates/instructions/index.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\templates\\instructions\\index.twig");
    }
}
