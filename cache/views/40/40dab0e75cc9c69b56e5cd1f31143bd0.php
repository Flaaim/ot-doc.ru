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
class __TwigTemplate_d1157407ecece7bcefe1c0925de5507c extends Template
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
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-12 \">
                <h2>Последние добавленные программы</h2>
                <div class=\"d-flex flex-wrap\">

                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lasts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["instruction"]) {
            // line 43
            yield "                        <div class=\"card document-card m-3\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <small><a href=\"/document/";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "template_id", [], "any", false, false, false, 46), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "title", [], "any", false, false, false, 46), "html", null, true);
            yield "</a></small>
                                </div>
                            </div>
                            <div class=\"card-footer document-footer d-flex justify-content-between\">
                                <span><i class=\"fa-regular fa-calendar-days\"></i> ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "date", [], "any", false, false, false, 50), "d.m.Y"), "html", null, true);
            yield "</span>
                                <span>Размер:  ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "size", [], "any", false, false, false, 51), "html", null, true);
            yield "</span>
                                <span><i class=\"fa-solid fa-download\"></i> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instruction"], "count", [], "any", false, false, false, 52), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['instruction'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                </div>

            </div>

        </div>
    </div>
";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "    ";
        yield from $this->yieldParentBlock("script", $context, $blocks);
        yield "
    <script src=\"https://cdn.datatables.net/v/dt/dt-2.2.1/sp-2.3.3/sl-3.0.0/datatables.min.js\"></script>
    <script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 67), "html", null, true);
        yield "/assets/js/dataTable.js\"></script>
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
        return array (  184 => 67,  178 => 65,  171 => 64,  160 => 56,  150 => 52,  146 => 51,  142 => 50,  131 => 46,  126 => 43,  122 => 42,  100 => 23,  87 => 12,  80 => 11,  74 => 8,  67 => 7,  61 => 4,  54 => 3,  43 => 1,);
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
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-12 \">
                <h2>Последние добавленные программы</h2>
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
{% endblock %}", "templates/programs/index.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/templates/programs/index.twig");
    }
}
