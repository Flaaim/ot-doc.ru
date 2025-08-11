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
class __TwigTemplate_56aaa63c8e6aaffed9808b1d1236867b extends Template
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
        yield "    <div id=\"overlay\">
        <div class=\"cv-spinner\">
            <span class=\"spinner\"></span>
        </div>
    </div>
</main>

";
        // line 27
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 31
        yield "</body>

";
        // line 33
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        // line 42
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
        yield from $this->loadTemplate("/parts/header.twig", "layouts/layout.twig", 4)->unwrap()->yield(CoreExtension::merge($context, ["title" =>         $this->unwrap()->renderBlock("title", $context, $blocks), "description" =>         $this->unwrap()->renderBlock("description", $context, $blocks)]));
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

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "
    ";
        // line 29
        yield from $this->loadTemplate("/parts/footer.twig", "layouts/layout.twig", 29)->unwrap()->yield($context);
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 34), "html", null, true);
        yield "/assets/js/libs/jquery.min.js\"></script>
    <script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 35), "html", null, true);
        yield "/assets/js/libs/jquery.magnific-popup.min.js\"></script>
    <script src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 36), "html", null, true);
        yield "/assets/js/download.js\"></script>
    <script src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 37), "html", null, true);
        yield "/assets/js/app.js\"></script>
    <script src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 38), "html", null, true);
        yield "/assets/js/auth.js\"></script>
    <script src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 39), "html", null, true);
        yield "/assets/js/flash.min.js\"></script>
    <script src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["init"] ?? null), "PATH", [], "any", false, false, false, 40), "html", null, true);
        yield "/assets/js/libs/bootstrap.bundle.min.js\"></script>
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
        return array (  198 => 40,  194 => 39,  190 => 38,  186 => 37,  182 => 36,  178 => 35,  173 => 34,  166 => 33,  161 => 29,  158 => 28,  151 => 27,  145 => 18,  138 => 17,  133 => 14,  126 => 13,  121 => 11,  118 => 10,  111 => 9,  105 => 4,  98 => 3,  91 => 42,  89 => 33,  85 => 31,  83 => 27,  74 => 20,  72 => 17,  69 => 16,  66 => 15,  64 => 13,  61 => 12,  59 => 9,  55 => 7,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set init = app.config.init %}

{% block head %}
    {% include \"/parts/header.twig\"  with {title: block('title'), description: block('description')
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
    <div id=\"overlay\">
        <div class=\"cv-spinner\">
            <span class=\"spinner\"></span>
        </div>
    </div>
</main>

{% block footer %}

    {% include \"/parts/footer.twig\" %}
{% endblock %}
</body>

{% block script %}
    <script src=\"{{ init.PATH }}/assets/js/libs/jquery.min.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/libs/jquery.magnific-popup.min.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/download.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/app.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/auth.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/flash.min.js\"></script>
    <script src=\"{{ init.PATH }}/assets/js/libs/bootstrap.bundle.min.js\"></script>
{% endblock %}


</html>", "layouts/layout.twig", "C:\\OSPanel\\domains\\iot-help2\\src\\views\\layouts\\layout.twig");
    }
}
