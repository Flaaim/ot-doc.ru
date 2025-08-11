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

/* admin/parts/aside.twig */
class __TwigTemplate_15585970fb859b5274b97adf4b570f3d extends Template
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
        yield "<!-- Main Sidebar Container -->
<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
        <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 5), "html", null, true);
        yield "/assets/adminLte/dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <li class=\"nav-item\">
                    <a href=\"/admin/document/instructions\" class=\"nav-link\">
                        <p>
                            Инструкции
                        </p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/admin/document/orders\" class=\"nav-link\">
                        <p>
                            Приказы
                        </p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/admin/document/provisions\" class=\"nav-link\">
                        <p>
                            Положения
                        </p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/admin/document/journals\" class=\"nav-link\">
                        <p>
                            Журналы
                        </p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/admin/document/programs\" class=\"nav-link\">
                        <p>
                            Программы
                        </p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/admin/document/other\" class=\"nav-link\">
                        <p>
                            Прочее
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/parts/aside.twig";
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
        return array (  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/parts/aside.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/admin/parts/aside.twig");
    }
}
