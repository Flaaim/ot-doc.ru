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

/* auth/register.twig */
class __TwigTemplate_556de759c64d1b15851764f2396a5b56 extends Template
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
        $this->parent = $this->loadTemplate("layouts/layout.twig", "auth/register.twig", 1);
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
        yield "   Регистрация в личном кабинете
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
                            <h2 class=\"my-3\">Регистрация на сайте</h2>
                            <form action=\"/auth/signup\" method=\"POST\">
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"email\">Ваш Email:</label>
                                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_email"] ?? null), "html", null, true);
        yield "\"/>
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"password\">Ваш пароль:</label>
                                    <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" />
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"confirm_password\">Повторите пароль:</label>
                                    <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\" />
                                </div>
                                <div class=\"col my-4\">
                                    <input type=\"submit\" class=\"btn btn-outline-secondary\" value=\"Зарегистрироваться\">
                                </div>
                                <p><a href=\"/auth/login\">Войти на сайт</a> | <a href=\"/auth/reset\">Восстановить пароль</a> </p>
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
        return "auth/register.twig";
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
        return array (  98 => 23,  86 => 13,  79 => 12,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/layout.twig\" %}

{% block title %}
   Регистрация в личном кабинете
{% endblock %}

{% block description %}

{% endblock %}


{% block content %}
    <div class=\"container\">
        <div class=\"row mt-3\">
            <div class=\"col-md-12 \">
                <div class=\"card-mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"card-body mx-3 my-3\">
                            <h2 class=\"my-3\">Регистрация на сайте</h2>
                            <form action=\"/auth/signup\" method=\"POST\">
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"email\">Ваш Email:</label>
                                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"{{ user_email }}\"/>
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"password\">Ваш пароль:</label>
                                    <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" />
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"confirm_password\">Повторите пароль:</label>
                                    <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\" />
                                </div>
                                <div class=\"col my-4\">
                                    <input type=\"submit\" class=\"btn btn-outline-secondary\" value=\"Зарегистрироваться\">
                                </div>
                                <p><a href=\"/auth/login\">Войти на сайт</a> | <a href=\"/auth/reset\">Восстановить пароль</a> </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "auth/register.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/auth/register.twig");
    }
}
