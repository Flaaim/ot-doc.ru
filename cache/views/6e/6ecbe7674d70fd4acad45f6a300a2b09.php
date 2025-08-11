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

/* /parts/footer.twig */
class __TwigTemplate_2ab1700d119abedf795c52b0d9e2f319 extends Template
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
        yield "<footer class=\"footer mt-auto py-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-6 my-3\">
                <div class=\"d-flex flex-column py-3\">
                    <small class=\"text-muted \">©2024-";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ot-doc.ru. Шаблоны документов по охране труда.</small>
                    <small class=\"text-muted\">Сервис содержит образцы документов по охране труда (инструкции, приказы, положения и т.д.) для скачивания и дальнейшего использования в работе.</small>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-6 my-3\">
                <h6 class=\"mb-3 text-center\">Разделы сайта:</h6>
                <div class=\"d-flex flex-row justify-content-around\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\"><a href=\"/document/instructions\" class=\"nav-link\">Инструкции</a></li>
                        <li class=\"nav-item\"><a href=\"/document/orders\" class=\"nav-link\">Приказы</a></li>
                        <li class=\"nav-item\"><a href=\"/document/provisions\" class=\"nav-link\">Положения</a></li>
                    </ul>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\"><a href=\"/document/programs\" class=\"nav-link\">Программы</a></li>
                        <li class=\"nav-item\"><a href=\"/document/journals\" class=\"nav-link\">Журналы</a></li>
                        <li class=\"nav-item\"><a href=\"/document/other\" class=\"nav-link\">Прочее</a></li>
                    </ul>
                </div>



            </div>
        </div>



    </div>
</footer>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/parts/footer.twig";
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
        return array (  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "/parts/footer.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/parts/footer.twig");
    }
}
