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

/* auth/login.twig */
class __TwigTemplate_cbfd999481f3e3d9982b8eecdb42aed6 extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "auth/login.twig", 1);
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
        yield "    Вход в личный кабинет
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
        yield "
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    <div class=\"container\">
        <div class=\"row mt-3\">
            <div class=\"col-md-12 \">
                <div class=\"card-mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"card-body mx-3 my-3\">
                            <h2 class=\"my-3\">Вход на сайт</h2>
                            <form action=\"/auth/signin\" method=\"POST\">
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"email\">Ваш Email:</label>
                                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" />
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"password\">Ваш пароль:</label>
                                    <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" />
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"remember_me\" value=\"0\" id=\"remember_me\">
                                    <label class=\"form-check-label\" for=\"remember_me\">
                                        Запомнить меня
                                    </label>
                                </div>
                                <div class=\"col my-4\">
                                    <input type=\"submit\" class=\"btn btn-outline-secondary\" value=\"Войти в кабинет\">
                                </div>
                                <p><a href=\"/auth/register\">Зарегистрироваться</a> | <a href=\"/auth/reset\">Восстановить пароль</a> </p>
                            </form>
                        </div>
                    </div>

                </div>
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
        return "auth/login.twig";
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
        return array (  86 => 13,  79 => 12,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "auth/login.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/auth/login.twig");
    }
}
