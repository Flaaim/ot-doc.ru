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

/* app/index.twig */
class __TwigTemplate_2f1fb209f887558a25a61199e3c3746f extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "app/index.twig", 1);
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
        yield "    Шаблоны документов по охране труда.
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
        yield "    Данный сервис содержит шаблоны инструкций, приказов, положений, программ, журналов и прочих документов по охране труда и смежных с ней направлений, таких как пожарная и промышленная безопасность.
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
        yield "    <main id=\"front-page\" class=\"site-main mt-5\">
        <div class=\"container pb-3 mb-12\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-md-12 mt-5\">
                    <h1>Шаблоны документов по охране труда</h1>
                    <p class=\" mt-3\">
                       Для помощи в работе специалистам и руководителям собрана коллекцию шаблонов документов по охране труда, пожарной и промышленной безопасности и другим направлениям. Все приведенные документы соответствуют требованиям НПА и действующего законодательства. Для поиска необходимого документа воспользуйтесь формой расположенной ниже.
                    </p>
                    <p>Всего:";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["count"] ?? null), "html", null, true);
        yield " шаблонов документов.</p>
                    <p>
                        <b>Выберите шаблон документа для поиска:</b>
                    </p>

              <div class=\"d-flex searched-input mb-3\">
                  <div class=\"input-group\">
                      <button class=\"btn btn-outline-secondary dropdown-toggle\" id=\"searched\" type=\"button\" data-bs-toggle=\"dropdown\" data-template=\"0\" aria-expanded=\"false\">Выберите шаблон</button>
                      <ul class=\"dropdown-menu\">
                          ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 30
            yield "                            <li><a class=\"dropdown-item templateList\" href=\"#\" data-template=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "name", [], "any", false, false, false, 30), "html", null, true);
            yield "</a></li>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['template'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                      </ul>
                      <input type=\"text\" class=\"form-control\" id=\"s\" placeholder=\"Введите наименование...\" aria-label=\"Введите наименование...\" aria-describedby=\"button-addon2\">
                      <button class=\"btn btn-outline-secondary\"  type=\"button\" id=\"search\">Поиск</button>
                  </div>
                  </div>
                    <small class=\"text-muted\">Поиск осуществляется по названию документа. Для более точных результатов поиска, не используйте слова инструкция, приказ, положение и т.д.</small>
              </div>
               <div class=\"search-result my-5\">

               </div>
                <h2>Последние добавленные документы</h2>
                <div class=\"d-flex flex-wrap\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["lasts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 45
            yield "                    <div class=\"card document-card m-3\">
                        <div class=\"card-body\">
                            <div class=\"card-title\">
                                <small><a href=\"/document/";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "template_id", [], "any", false, false, false, 48), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 48), "html", null, true);
            yield "</a></small>
                            </div>
                        </div>
                        <div class=\"card-footer document-footer d-flex justify-content-between\">
                            <span><i class=\"fa-regular fa-calendar-days\"></i> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "date", [], "any", false, false, false, 52), "d.m.Y"), "html", null, true);
            yield "</span>
                            <span>Размер:  ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "size", [], "any", false, false, false, 53), "html", null, true);
            yield "</span>
                            <span><i class=\"fa-solid fa-download\"></i> ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "count", [], "any", false, false, false, 54), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['document'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "                </div>
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
        return "app/index.twig";
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
        return array (  175 => 58,  165 => 54,  161 => 53,  157 => 52,  146 => 48,  141 => 45,  137 => 44,  123 => 32,  112 => 30,  108 => 29,  96 => 20,  86 => 12,  79 => 11,  73 => 9,  66 => 8,  60 => 5,  53 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "app/index.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/app/index.twig");
    }
}
