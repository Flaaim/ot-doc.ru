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

/* /parts/nav.twig */
class __TwigTemplate_07bfede2b677fe2105d36b13e417594a extends Template
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
        yield "<nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">
            <span>ot-doc.ru</span>

        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
            <div class=\"collapse collapse navbar-collapse justify-content-center\" id=\"main-menu\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/orders\">Приказы</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/instructions\">Инструкции</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/provisions\">Положения</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/programs\">Программы</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/journals\">Журналы</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/other\">Прочее</a>
                    </li>
                </ul>
            </div>
        <div class=\"user-sign\">
";
        // line 38
        yield "
        </div>
    </div>
</nav>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/parts/nav.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  76 => 38,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">
            <span>ot-doc.ru</span>

        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
            <div class=\"collapse collapse navbar-collapse justify-content-center\" id=\"main-menu\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/orders\">Приказы</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/instructions\">Инструкции</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/provisions\">Положения</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/programs\">Программы</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/journals\">Журналы</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/document/other\">Прочее</a>
                    </li>
                </ul>
            </div>
        <div class=\"user-sign\">
{#            {% if is_user_logged_in(app) == false %}#}
{#                    <a href=\"/auth/login\"><i class=\"fa-regular fa-user\"></i></a>#}
{#                {% else %}#}
{#                    <a href=\"/cabinet\"><i class=\"fa-solid fa-user\"></i></a>#}
{#            {% endif %}#}

        </div>
    </div>
</nav>", "/parts/nav.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/parts/nav.twig");
    }
}
