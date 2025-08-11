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
class __TwigTemplate_d53f89f453d9808b54af57082adf54a3 extends Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 8), "html", null, true);
        yield "/assets/css/libs/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 9), "html", null, true);
        yield "/assets/css/style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 10), "html", null, true);
        yield "/assets/css/loading.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 11), "html", null, true);
        yield "/assets/css/flash.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 12), "html", null, true);
        yield "/assets/css/libs/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 13), "html", null, true);
        yield "/assets/css/libs/magnific-popup.css\" type=\"text/css\">
    <link rel=\"icon\" href=\"https://ot-doc.ru/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"canonical\" href=\"https://ot-doc.ru";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "URI", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
    <title>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</title>
    <meta name=\"description\" content=\"";
        // line 17
        if (Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) {
            yield "Поиск инструкций по охране труда по профессиям и видам работ";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        }
        yield "\">
    <meta name=\"keywords\" content=\"";
        // line 18
        if (Twig\Extension\CoreExtension::testEmpty(($context["keywords"] ?? null))) {
            yield "Инструкции по охране труда, инструкции, охрана труда, инструкции по технике безопасности";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["keywords"] ?? null), "html", null, true);
        }
        yield "\">
    <link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 19), "html", null, true);
        yield "/assets/css/libs/datatables.min.css\" rel=\"stylesheet\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 20), "html", null, true);
        yield "/assets/favicon/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 21), "html", null, true);
        yield "/assets/favicon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 22), "html", null, true);
        yield "/assets/favicon/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 23), "html", null, true);
        yield "/assets/favicon/site.webmanifest\">
    <script src=\"https://yastatic.net/s3/passport-sdk/autofill/v1/sdk-suggest-with-polyfills-latest.js\"></script>
    <!-- Google tag (gtag.js) -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-LZKNE1KEDM\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LZKNE1KEDM');
    </script>


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
        return array (  116 => 23,  112 => 22,  108 => 21,  104 => 20,  100 => 19,  92 => 18,  84 => 17,  80 => 16,  76 => 15,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  42 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ init.PATH }}/assets/css/libs/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ init.PATH }}/assets/css/style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ init.PATH }}/assets/css/loading.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ init.PATH }}/assets/css/flash.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ init.PATH }}/assets/css/libs/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ init.PATH }}/assets/css/libs/magnific-popup.css\" type=\"text/css\">
    <link rel=\"icon\" href=\"https://ot-doc.ru/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"canonical\" href=\"https://ot-doc.ru{{ init.URI }}\">
    <title>{{ title }}</title>
    <meta name=\"description\" content=\"{% if description is empty %}Поиск инструкций по охране труда по профессиям и видам работ{% else %}{{ description }}{% endif %}\">
    <meta name=\"keywords\" content=\"{% if keywords is empty %}Инструкции по охране труда, инструкции, охрана труда, инструкции по технике безопасности{% else %}{{ keywords }}{% endif %}\">
    <link href=\"{{ init.PATH }}/assets/css/libs/datatables.min.css\" rel=\"stylesheet\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ init.PATH }}/assets/favicon/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ init.PATH }}/assets/favicon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ init.PATH }}/assets/favicon/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"{{ init.PATH }}/assets/favicon/site.webmanifest\">
    <script src=\"https://yastatic.net/s3/passport-sdk/autofill/v1/sdk-suggest-with-polyfills-latest.js\"></script>
    <!-- Google tag (gtag.js) -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-LZKNE1KEDM\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LZKNE1KEDM');
    </script>


</head>
<body class=\"d-flex flex-column h-100\">
", "/parts/header.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\parts\\header.twig");
    }
}
