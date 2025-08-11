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

/* auth/popup_login.twig */
class __TwigTemplate_cd3575b663eba1c9d8cb907fd312be55 extends Template
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
        yield "<div id=\"small-dialog\" class=\"zoom-anim-dialog mfp-hide\">
    <p><small>Скачивание документов доступно только для зарегистрированных пользователей.</small></p>
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
        <p>Или войти в 1 клик через:</p>
        <div id=\"buttonContainerId\">
          <a href=\"/auth/oauth\" class=\"yandex_oauth\">
            <span class=\"icon-yandex\">&#1071;</span>
            Yandex
          </a>
        </div>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "auth/popup_login.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"small-dialog\" class=\"zoom-anim-dialog mfp-hide\">
    <p><small>Скачивание документов доступно только для зарегистрированных пользователей.</small></p>
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
        <p>Или войти в 1 клик через:</p>
        <div id=\"buttonContainerId\">
          <a href=\"/auth/oauth\" class=\"yandex_oauth\">
            <span class=\"icon-yandex\">&#1071;</span>
            Yandex
          </a>
        </div>
    </form>
</div>
", "auth/popup_login.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\auth\\popup_login.twig");
    }
}
