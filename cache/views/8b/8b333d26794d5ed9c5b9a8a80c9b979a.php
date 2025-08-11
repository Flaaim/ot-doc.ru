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

/* templates/journals/index.twig */
class __TwigTemplate_a7e5b884172811d4bdd001598d8e503b extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "templates/journals/index.twig", 1);
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
        yield "    Шаблоны (образцы) журналов по охране труда, промышленной безопасности, пожбезопасности и другие
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
        yield "    Шаблоны журналов по охране труда, которые охватывают различные направления работы специалистов на предприятии.
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
                <h1 class=\"mb-5\">Образцы (шаблоны) журналов</h1>
                <p>
                    Ниже в таблице вы найдете образцы (шаблоны) типовых журналов по охране труда по различным направлениям работы.
                </p>
                <p>
                    Приведенные ниже журналы охватывают различные направляения работы по охране труда и смежных направления, таких как обучения по охране труда, медицинские осмотры, проверки, несчатные случаи и т.д. Все приведенные журналы акутальны на дату загрузки.
                </p>
                <p><b>Всего журналов: ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield " </b></p>
                <div class=\"attention\">
                    <h5>Внимание!</h5>
                    <p>Ниже приведена статическая страница с документами, если вам необходимы такие функции как <b>фильтрация данных</b>, <b>сортировка</b>, <b>поиск</b> и т.д., переходите по <a href=\"/document/js/";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "slug", [], "any", false, false, false, 25), "html", null, true);
        yield "\">ссылке</a></p>
                </div>
                <div class=\"d-flex my-5 flex-wrap \">
                    <table data-template=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 28), "html", null, true);
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["documents"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["document"]) {
            // line 40
            yield "                            <tr>
                                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "</td>
                                <td><a href=\"/document/";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 42), "html", null, true);
            yield "</a></td>
                                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "type_name_1", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "type_name_2", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "date", [], "any", false, false, false, 45), "d.m.Y"), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['document'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                        </tbody>
                    </table>
                    ";
        // line 50
        yield ($context["pagination"] ?? null);
        yield "
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-12 \">
                <h2>Последние добавленные журналы</h2>
                <div class=\"d-flex flex-wrap\">

                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lasts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 60
            yield "                        <div class=\"card document-card m-3\">
                            <div class=\"card-body\">
                                <div class=\"card-title\">
                                    <small><a href=\"/document/";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "template_id", [], "any", false, false, false, 63), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 63), "html", null, true);
            yield "</a></small>
                                </div>
                            </div>
                            <div class=\"card-footer document-footer d-flex justify-content-between\">
                                <span><i class=\"fa-regular fa-calendar-days\"></i> ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "date", [], "any", false, false, false, 67), "d.m.Y"), "html", null, true);
            yield "</span>
                                <span>Размер:  ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "size", [], "any", false, false, false, 68), "html", null, true);
            yield "</span>
                                <span><i class=\"fa-solid fa-download\"></i> ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "count", [], "any", false, false, false, 69), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['document'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        return "templates/journals/index.twig";
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
        return array (  214 => 73,  204 => 69,  200 => 68,  196 => 67,  185 => 63,  180 => 60,  176 => 59,  164 => 50,  160 => 48,  151 => 45,  147 => 44,  143 => 43,  135 => 42,  131 => 41,  128 => 40,  124 => 39,  110 => 28,  104 => 25,  98 => 22,  86 => 12,  79 => 11,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "templates/journals/index.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/templates/journals/index.twig");
    }
}
