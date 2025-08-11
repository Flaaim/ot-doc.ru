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

/* auth/update_password.twig */
class __TwigTemplate_e507df8aea479be822a6ade86bdc5130 extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "auth/update_password.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "    Восстановление пароля. Укажите новый пароль
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "
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
            <div class=\"col-md-10 col-sm-12 mt-5\">
                <h2>Восстановление пароля.</h2>

                <p class=\"mt-3\">
                    Заполните в форму ниже.
                </p>
                <form action=\"/auth/update_password\" method=\"POST\">
                    <div class=\"form-outline mb-4\">
                        <label class=\"form-label\" for=\"password\">Ваш пароль:</label>
                        <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" />
                    </div>
                    <div class=\"form-outline mb-4\">
                        <label class=\"form-label\" for=\"confirm_password\">Повторите пароль:</label>
                        <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\" />
                    </div>
                    <input type=\"hidden\" name=\"selector\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selector"] ?? null), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\">
                    <div class=\"col my-4\">
                        <input type=\"submit\" class=\"btn btn-outline-secondary\" value=\"Отправить\">
                    </div>
                </form>
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
        return "auth/update_password.twig";
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
        return array (  109 => 30,  105 => 29,  86 => 12,  79 => 11,  73 => 7,  66 => 6,  60 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "auth/update_password.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/auth/update_password.twig");
    }
}
