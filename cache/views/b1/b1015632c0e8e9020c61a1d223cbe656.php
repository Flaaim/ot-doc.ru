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

/* mail/reset_password.html.twig */
class __TwigTemplate_795d18ee31fd1800ab3c124d2eb855fc extends Template
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
        yield "<h1>Восстановление пароля</h1>
<p>
    Вы запросили восстановление пароля на сайте.
</p>
<p>
    Для восстановления пароля используйте следующую ссылку ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
        yield "
</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mail/reset_password.html.twig";
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
        return new Source("<h1>Восстановление пароля</h1>
<p>
    Вы запросили восстановление пароля на сайте.
</p>
<p>
    Для восстановления пароля используйте следующую ссылку {{ link }}
</p>", "mail/reset_password.html.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\mail\\reset_password.html.twig");
    }
}
