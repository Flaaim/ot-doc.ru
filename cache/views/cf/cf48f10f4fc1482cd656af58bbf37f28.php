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

/* /parts/header.twig */
class __TwigTemplate_9a4050704424df461e8b0076c9ba5297 extends Template
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
        yield "<!Doctype html>
<html lang=\"ru\" class=\"h-100\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 9), "html", null, true);
        yield "/assets/css/style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 10), "html", null, true);
        yield "/assets/css/loading.css\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 11), "html", null, true);
        yield "/assets/css/flash.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" integrity=\"sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"icon\" href=\"https://iot-help.ru/favicon.ico\" type=\"image/x-icon\">
    <title>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</title>
    <meta name=\"description\" content=\"";
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) {
            yield "Поиск инструкций по охране труда по профессиям и видам работ";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        }
        yield "\">
    <meta name=\"keywords\" content=\"";
        // line 16
        if (Twig\Extension\CoreExtension::testEmpty(($context["keywords"] ?? null))) {
            yield "Инструкции по охране труда, инструкции, охрана труда, инструкции по технике безопасности";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["keywords"] ?? null), "html", null, true);
        }
        yield "\">
    <link href=\"https://cdn.datatables.net/v/dt/dt-2.2.1/sp-2.3.3/sl-3.0.0/datatables.min.css\" rel=\"stylesheet\">




</head>
<body class=\"d-flex flex-column h-100\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/parts/header.twig";
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
        return array (  78 => 16,  70 => 15,  66 => 14,  60 => 11,  56 => 10,  52 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!Doctype html>
<html lang=\"ru\" class=\"h-100\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ init.PATH }}/assets/css/style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ init.PATH }}/assets/css/loading.css\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ init.PATH }}/assets/css/flash.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\" integrity=\"sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"icon\" href=\"https://iot-help.ru/favicon.ico\" type=\"image/x-icon\">
    <title>{{ title }}</title>
    <meta name=\"description\" content=\"{% if description is empty %}Поиск инструкций по охране труда по профессиям и видам работ{% else %}{{ description }}{% endif %}\">
    <meta name=\"keywords\" content=\"{% if keywords is empty %}Инструкции по охране труда, инструкции, охрана труда, инструкции по технике безопасности{% else %}{{ keywords }}{% endif %}\">
    <link href=\"https://cdn.datatables.net/v/dt/dt-2.2.1/sp-2.3.3/sl-3.0.0/datatables.min.css\" rel=\"stylesheet\">




</head>
<body class=\"d-flex flex-column h-100\">
", "/parts/header.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/parts/header.twig");
    }
}
