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

/* templates/programs/index.twig */
class __TwigTemplate_a6381700b9fdd0142407a732edffdaef extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "templates/programs/index.twig", 1);
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
        yield "    Шаблоны (образцы) программ обучений по охране труда
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
        yield "    Шаблоны программ обучений по охране труда и другим смежным направлениям работы.
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
                <h1 class=\"mb-5\">Образцы (шаблоны) программ обучений</h1>
                <p>
                    Ниже в таблице вы найдете образцы (шаблоны) типовых программ обучений по охране труда и другим смежным направлениям работы.
                </p>
                <div class=\"attention\">
                    <h5>Внимание!</h5>
                    <p>Ниже приведена статическая страница с документами, если вам необходимы такие функции как <b>фильтрация данных</b>, <b>сортировка</b>, <b>поиск</b> и т.д., переходите по <a href=\"/document/js/";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "slug", [], "any", false, false, false, 21), "html", null, true);
        yield "\">ссылке</a></p>
                </div>
                <div class=\"d-flex my-5 flex-wrap \">
                    <table id=\"myTable\" class=\"table\" data-template=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["documents"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["document"]) {
            // line 36
            yield "                            <tr>
                                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "</td>
                                <td><a href=\"/document/";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 38), "html", null, true);
            yield "</a></td>
                                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "type_name_1", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "type_name_2", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "date", [], "any", false, false, false, 41), "d.m.Y"), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['document'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                        </tbody>
                    </table>
                    ";
        // line 46
        yield ($context["pagination"] ?? null);
        yield "
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-12 \">
                <h2>Последние добавленные программы</h2>
                <div class=\"d-flex flex-wrap\">

                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lasts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 56
            yield "                        <div class=\"card document-card m-3\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <small><a href=\"/document/";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "template_id", [], "any", false, false, false, 59), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 59), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["instruction"] ?? null), "title", [], "any", false, false, false, 59), "html", null, true);
            yield "</a></small>
                                </div>
                            </div>
                            <div class=\"card-footer document-footer d-flex justify-content-between\">
                                <span><i class=\"fa-regular fa-calendar-days\"></i> ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "date", [], "any", false, false, false, 63), "d.m.Y"), "html", null, true);
            yield "</span>
                                <span>Размер:  ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "size", [], "any", false, false, false, 64), "html", null, true);
            yield "</span>
                                <span><i class=\"fa-solid fa-download\"></i> ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "count", [], "any", false, false, false, 65), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['document'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
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
        return "templates/programs/index.twig";
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
        return array (  207 => 69,  197 => 65,  193 => 64,  189 => 63,  178 => 59,  173 => 56,  169 => 55,  157 => 46,  153 => 44,  144 => 41,  140 => 40,  136 => 39,  128 => 38,  124 => 37,  121 => 36,  117 => 35,  103 => 24,  97 => 21,  86 => 12,  79 => 11,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/layout.twig\" %}

{% block title %}
    Шаблоны (образцы) программ обучений по охране труда
{% endblock %}

{% block description %}
    Шаблоны программ обучений по охране труда и другим смежным направлениям работы.
{% endblock %}

{% block content %}
    <div class=\"container pb-3 mb-12\">
        <div class=\"row mt-3\">
            <div class=\"col-md-12 mt-5\">
                <h1 class=\"mb-5\">Образцы (шаблоны) программ обучений</h1>
                <p>
                    Ниже в таблице вы найдете образцы (шаблоны) типовых программ обучений по охране труда и другим смежным направлениям работы.
                </p>
                <div class=\"attention\">
                    <h5>Внимание!</h5>
                    <p>Ниже приведена статическая страница с документами, если вам необходимы такие функции как <b>фильтрация данных</b>, <b>сортировка</b>, <b>поиск</b> и т.д., переходите по <a href=\"/document/js/{{ template.slug }}\">ссылке</a></p>
                </div>
                <div class=\"d-flex my-5 flex-wrap \">
                    <table id=\"myTable\" class=\"table\" data-template=\"{{ template.id }}\" style=\"width:100%\">
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
                <h2>Последние добавленные программы</h2>
                <div class=\"d-flex flex-wrap\">

                    {% for document in lasts %}
                        <div class=\"card document-card m-3\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <small><a href=\"/document/{{ document.template_id }}/{{ document.id }}\">{{ instruction.title }}</a></small>
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
", "templates/programs/index.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\templates\\programs\\index.twig");
    }
}
