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
class __TwigTemplate_62094c2ae03ba182f25041a6a2439ea8 extends Template
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
            'script' => [$this, 'block_script'],
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
                <p>
                    Используйте форму фильтрации для получения более точных результатов. Фильтр доступен по названию и типу документа. Сортировка инструкций по возрастанию/убыванию осущестляется по нажатию на столбцы.
                </p>
                <div class=\"d-flex my-5 flex-wrap \">
                    <table id=\"myTable\" data-template=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
        yield "\" style=\"width:100%\">
                        <thead>
                        <tr>
                            <th>№ п/п</th>
                            <th>Наименование документа</th>
                            <th>Тип</th>
                            <th>Подтип</th>
                            <th>Дата</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["documents"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 35
            yield "                                <tr>
                                    <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                                    <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                                    <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "type_name_1", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                                    <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "type_name_2", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                    <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "date", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                </tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-12 \">
                <h2>Последние добавленные инструкции</h2>
                <div class=\"d-flex flex-wrap\">

                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lasts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["instruction"]) {
            // line 54
            yield "                        <div class=\"card document-card m-3\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <small><a href=\"/document/";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "template_id", [], "any", false, false, false, 57), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "title", [], "any", false, false, false, 57), "html", null, true);
            yield "</a></small>
                                </div>
                            </div>
                            <div class=\"card-footer document-footer d-flex justify-content-between\">
                                <span><i class=\"fa-regular fa-calendar-days\"></i> ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "date", [], "any", false, false, false, 61), "d.m.Y"), "html", null, true);
            yield "</span>
                                <span>Размер:  ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "size", [], "any", false, false, false, 62), "html", null, true);
            yield "</span>
                                <span><i class=\"fa-solid fa-download\"></i> ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "count", [], "any", false, false, false, 63), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['instruction'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                </div>

            </div>

        </div>
    </div>
";
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "    ";
        yield from $this->yieldParentBlock("script", $context, $blocks);
        yield "
    <script src=\"https://cdn.datatables.net/v/dt/dt-2.2.1/sp-2.3.3/sl-3.0.0/datatables.min.js\"></script>
    <script src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 78), "html", null, true);
        yield "/assets/js/dataTable.js\"></script>
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
        return array (  241 => 78,  235 => 76,  228 => 75,  217 => 67,  207 => 63,  203 => 62,  199 => 61,  188 => 57,  183 => 54,  179 => 53,  167 => 43,  150 => 40,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  131 => 35,  114 => 34,  100 => 23,  87 => 12,  80 => 11,  74 => 8,  67 => 7,  61 => 4,  54 => 3,  43 => 1,);
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
                <p>
                    Используйте форму фильтрации для получения более точных результатов. Фильтр доступен по названию и типу документа. Сортировка инструкций по возрастанию/убыванию осущестляется по нажатию на столбцы.
                </p>
                <div class=\"d-flex my-5 flex-wrap \">
                    <table id=\"myTable\" data-template=\"{{ template.id }}\" style=\"width:100%\">
                        <thead>
                        <tr>
                            <th>№ п/п</th>
                            <th>Наименование документа</th>
                            <th>Тип</th>
                            <th>Подтип</th>
                            <th>Дата</th>
                        </tr>
                        </thead>
                        <tbody>
                            {% for document in documents %}
                                <tr>
                                    <td>{{ loop.index }}</td>
                                    <td>{{ document.title }}</td>
                                    <td>{{ document.type_name_1 }}</td>
                                    <td>{{ document.type_name_2 }}</td>
                                    <td>{{ document.date }}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-12 \">
                <h2>Последние добавленные инструкции</h2>
                <div class=\"d-flex flex-wrap\">

                    {% for instruction in lasts %}
                        <div class=\"card document-card m-3\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <small><a href=\"/document/{{ instruction.template_id }}/{{ instruction.id }}\">{{ instruction.title }}</a></small>
                                </div>
                            </div>
                            <div class=\"card-footer document-footer d-flex justify-content-between\">
                                <span><i class=\"fa-regular fa-calendar-days\"></i> {{ instruction.date | date(\"d.m.Y\") }}</span>
                                <span>Размер:  {{ instruction.size }}</span>
                                <span><i class=\"fa-solid fa-download\"></i> {{ instruction.count }}</span>
                            </div>
                        </div>
                    {% endfor %}
                </div>

            </div>

        </div>
    </div>
{% endblock %}

{% block script %}
    {{ parent() }}
    <script src=\"https://cdn.datatables.net/v/dt/dt-2.2.1/sp-2.3.3/sl-3.0.0/datatables.min.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/dataTable.js\"></script>
{% endblock %}", "templates/instructions/index.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/templates/instructions/index.twig");
    }
}
