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

/* layouts/layout.twig */
class __TwigTemplate_c55d5774c18d97261185838e06f20c1e extends Template
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
            'head' => [$this, 'block_head'],
            'navbar' => [$this, 'block_navbar'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["init"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "config", [], "any", false, false, false, 1), "init", [], "any", false, false, false, 1);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 7
        yield "
<main class=\"flex-shrink-0\">
    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 12
        yield "
    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('breadcrumbs', $context, $blocks);
        // line 15
        yield "        ";
        yield from $this->loadTemplate("inc/alert.twig", "layouts/layout.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "
    ";
        // line 17
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 20
        yield "</main>

";
        // line 22
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 25
        yield "</body>

";
        // line 27
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        // line 36
        yield "

</html>";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from $this->loadTemplate("/parts/header.twig", "layouts/layout.twig", 4)->unwrap()->yield(CoreExtension::merge($context, ["title" =>         $this->unwrap()->renderBlock("title", $context, $blocks)]));
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "        ";
        yield from $this->loadTemplate("/parts/nav.twig", "layouts/layout.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "    ";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "
    ";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        yield from $this->loadTemplate("/parts/footer.twig", "layouts/layout.twig", 23)->unwrap()->yield($context);
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 29), "html", null, true);
        yield "/assets/js/download.js\"></script>
    <script src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 30), "html", null, true);
        yield "/assets/js/app.js\"></script>
    <script src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 31), "html", null, true);
        yield "/assets/js/auth.js\"></script>
    <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 32), "html", null, true);
        yield "/assets/js/flash.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js\" integrity=\"sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm\" crossorigin=\"anonymous\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/layout.twig";
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
        return array (  181 => 32,  177 => 31,  173 => 30,  169 => 29,  166 => 28,  159 => 27,  153 => 23,  146 => 22,  140 => 18,  133 => 17,  128 => 14,  121 => 13,  116 => 11,  113 => 10,  106 => 9,  100 => 4,  93 => 3,  86 => 36,  84 => 27,  80 => 25,  78 => 22,  74 => 20,  72 => 17,  69 => 16,  66 => 15,  64 => 13,  61 => 12,  59 => 9,  55 => 7,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set init = app.config.init %}

{% block head %}
    {% include \"/parts/header.twig\"  with {title: block('title'),
        } %}
{% endblock %}

<main class=\"flex-shrink-0\">
    {% block navbar %}
        {% include \"/parts/nav.twig\" %}
    {% endblock %}

    {% block breadcrumbs %}
    {% endblock %}
        {% include 'inc/alert.twig' %}

    {% block content %}

    {% endblock %}
</main>

{% block footer %}
    {% include \"/parts/footer.twig\" %}
{% endblock %}
</body>

{% block script %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"{{ init.PATH }}/assets/js/download.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/app.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/auth.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/flash.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js\" integrity=\"sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm\" crossorigin=\"anonymous\"></script>
{% endblock %}


</html>", "layouts/layout.twig", "/var/www/u1656040/data/www/ot-doc.ru/src/views/layouts/layout.twig");
    }
}
